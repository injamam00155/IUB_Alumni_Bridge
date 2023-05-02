use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    protected $primaryKey = 'userEmail';
    public $incrementing = false;
    protected $keyType = 'string';
    public $timestamps = false;

    public function admin()
    {
        return $this->hasOne(Admin::class, 'userEmail');
    }

    public function student()
    {
        return $this->hasOne(Student::class, 'userEmail');
    }

    public function alumni()
    {
        return $this->hasOne(Alumni::class, 'userEmail');
    }

    public function currentStudent()
    {
        return $this->hasOne(CurrentStudent::class, 'userEmail');
    }

    public function comments()
    {
        return $this->hasMany(Comment::class, 'userEmail');
    }

    public function bookmarks()
    {
        return $this->hasMany(Bookmark::class, 'userEmail');
    }
}
