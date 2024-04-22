<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <body>
        <div>
            <form method="POST" action="postStudetData">
            @csrf
                <div>
                    <lable>Name</lable> <input type="text" name="std_name" id="std_name" placeholder="Name"> </input>
                </div>
                <div>
                    <lable>Weight</lable> <input type="double" name="std_weight" id="std_weight" placeholder="Weight"></input>
                </div>
                <button type="submit">Submit</button>
            </form>
        </div>
    </body>
</html>
