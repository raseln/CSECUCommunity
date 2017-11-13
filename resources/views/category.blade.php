<!DOCTYPE html>
<html>
    <head>
        <title>
        </title>
    </head>
    <body>
        <form method="post">
            <b>
                Name:
            </b>
            <input name="name" type="text">
                <input name="submit" type="submit">
                    <input name="_token" type="hidden" value="{{ Session::token() }}">
                    </input>
                </input>
            </input>
        </form>
    </body>
</html>