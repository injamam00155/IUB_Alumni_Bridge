use Illuminate\Database\Eloquent\Model;

class Bookmark extends Model
{
    protected $primaryKey = 'bookmarkID';
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
