CK Editor:
Usage

Default way (initiate by name or id) :

    <script src="/vendor/unisharp/laravel-ckeditor/ckeditor.js"></script>
    <script>
        CKEDITOR.replace( 'article-ckeditor' );
    </script>

Or if you want to initiate by jQuery selector :

    <script src="/vendor/unisharp/laravel-ckeditor/ckeditor.js"></script>
    <script src="/vendor/unisharp/laravel-ckeditor/adapters/jquery.js"></script>
    <script>
        $('textarea').ckeditor();
        // $('.textarea').ckeditor(); // if class is prefered.
    </script>

    to output html:
    {!!$post->body!!}

    



Edit app/Providers/AppServiceProvider:
add to namespace:
use Illuminate\Support\Facades\Schema;
in boot function, add:
Schema::defaultStringLength(191);
