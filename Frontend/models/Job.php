use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    protected $primaryKey = 'postID';
    public $timestamps = false;

    public function post()
    {
        return $this->belongsTo(Post::class, 'postID');
    }

    public function admin()
    {
        return $this->belongsTo(Admin::class, 'userEmail');
    }
}
