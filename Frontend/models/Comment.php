use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $primaryKey = 'commentID';
    <!-- public $timestamps = false; -->

    public function user()
    {
        return $this->belongsTo(User::class, 'userEmail');
    }

    public function post()
    {
        return $this->belongsTo(Post::class, 'postID');
    }
}
