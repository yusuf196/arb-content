


    <div class="container">
        <form action="add" method="post">
            {{ csrf_field() }}
            <div class="form-group">
                <label for="usr">title:</label>
                <input type="text" class="form-control"  name="title" >
            </div>
            <div class="form-group">
                <label for="usr">body:</label>
                <textarea rows="4" cols="50" name="body" class="form-control">

            </textarea>
            </div>
            </br>
            <input type="submit" class="btn bg-primary" value="add ">
        </form>
    </div>
