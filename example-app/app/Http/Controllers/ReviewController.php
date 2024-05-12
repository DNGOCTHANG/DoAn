<?php
namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\Review;

class ReviewController extends Controller
{
    public function submitReview(Request $request)
    {
        $request->validate([
            'rating' => 'required|integer|between:1,5',
            'comment' => 'nullable|string|max:255',
        ]);

        // Lưu đánh giá vào cơ sở dữ liệu
        $review = new Review();
        $review->rating = $request->rating;
        $review->comment = $request->comment;
        $review->save();

        // Redirect hoặc thực hiện các hành động khác sau khi lưu đánh giá thành công
        return redirect()->back()->with('success', 'Đánh giá của bạn đã được gửi.');
    }
}
