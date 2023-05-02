use Illuminate\Database\Eloquent\Model;

class Query extends Model
{
    protected $primaryKey = 'postID';
    public $timestamps = false;

    public function post()
    {
        return $this->belongsTo(Post::class, 'postID');
    }
}
