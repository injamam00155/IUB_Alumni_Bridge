use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
    protected $primaryKey = 'userEmail';
    public $incrementing = false;
    protected $keyType = 'string';
    public $timestamps = false;

    public function user()
    {
        return $this->belongsTo(User::class, 'userEmail');
    }

    public function awards()
    {
        return $this->hasMany(Awards::class, 'userEmail');
    }

    public function events()
    {
        return $this->hasMany(Event::class, 'userEmail');
    }
}
