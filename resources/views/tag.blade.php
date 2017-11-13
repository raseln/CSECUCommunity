<!DOCTYPE html>
<html>
    <head>
        <title>
        </title>
    </head>
    <body>
        <form action="{{ route('tag.store') }}" method="post">
            <input name="name" type="text">
                <input name="submit" type="submit" value="submit">
                    <input name="_token" type="hidden" value="{{ Session::token() }}">
                    </input>
                </input>
            </input>
        </form>
    </body>
</html>