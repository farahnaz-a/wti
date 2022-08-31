<?php

namespace App\Http\Controllers;

use App\Mail\SubscriberPromotionMail;
use App\Models\Admission;
use App\Models\Subscriber;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

use function GuzzleHttp\Promise\all;

class AdminController extends Controller
{

    // All Subscriber Page
    public function subscriberList(Request $request){
        $subscribers = Subscriber::latest()->get();
        return view('backend.newsletter_list', compact('subscribers'));
    }

    // Subscriber Status Change 
    public function subscriberStatusChange(Request $request){
        $subscriber = Subscriber::find($request->id);
        $subscriber->update([
            'status' => ($subscriber->status == 'active')? 'deactive':'active',
        ]);
        return back()->with('success', 'Status Updated');
    }
    
    // Subscriber Delete
    public function subscriberDestroy(Request $request){
        Subscriber::find($request->id)->delete();
        return back()->with('success', 'Deleted Successfully');
    }

    // Subscriber mail send
    public function subscriberMailSend(Request $request){
        $request->validate([
            'subject' => 'required',
            'mail_body' => 'required',
        ]);
 
        $subscribers  = Subscriber::where('status', 'active')->get();

        foreach($subscribers as $subscriber){
            Mail::to($subscriber->email)->send(new SubscriberPromotionMail($request->subject, $request->mail_body));
        }

        return back()->with('success', 'Mail Sent Successfully');
    }

    // User list 
    public function userList(){
        $users = User::latest()->get();
        return view('backend.user_list', compact('users'));
    }

    // User Status Change 
    public function userStausChange(Request $request){
        $user = User::find($request->id); 
        $user->status = ($user->status == 'active')? 'deactive':'active';
        $user->save();
        return back()->with('success', 'Status Updated');
    }

    // Student list 
    public function studentList(){
        $students = Admission::latest()->get();
        return view('backend.students', compact('students'));
    }

    // Student Approve 
    public function studentApprove(Request $request){
        $request->validate([
            'batch_id' => 'required',
        ]);
        Admission::find($request->id)->update([
            'status' => 'approved',
            'batch_id' => $request->batch_id,
        ]);
        return back()->with('success', 'Approved Successfully');
    }

    // Student Rejected 
    public function studentReject(Request $request){
        Admission::find($request->id)->update([
            'status' => 'rejected', 
        ]);
        return back()->with('success', 'Rejected Successfully');
    }

    // Student Pending 
    public function studentPending(Request $request){
        Admission::find($request->id)->update([
            'status' => 'pending', 
        ]);
        return back()->with('success', 'Rejected Successfully');
    }


    // END
}
