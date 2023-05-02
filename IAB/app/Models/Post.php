use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $primaryKey = 'postID';
    public $timestamps = false;

    public function query()
    {
        return $this->hasOne(Query::class, 'postID');
    }

    public function awards()
    {
        return $this->hasOne(Awards::class, 'postID');
    }

    public function event()
    {
        return $this->hasOne(Event::class, 'postID');
    }

    public function job()
    {
        return $this->hasOne(Job::class, 'postID');
    }

    public function comments()
    {
        return $this->hasMany(Comment::class, 'postID');
    }

    public function bookmarks()
    {
        return $this->hasMany(Bookmark::class, 'postID');
    }
}
