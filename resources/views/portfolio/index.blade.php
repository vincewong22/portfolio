@extends('layouts.layout')



@section('content')

    <div class="container">
        <div class=row>
            <div class="col-lg-12">
                <table class="table-bordered">
                    <tr>
                        <th>Project description</th>
                        <th>Link to project</th>
                    </tr>
                    <tr>
                        <td>
                            Test site for CRM software to manage surveys and generate reports. Authentication has been
                            disabled, just push login to gain access
                        </td>
                        <td>
                            <a href="../biospa/public/index.php">CRM Surveys</a>
                        </td>
                    </tr>
                    <tr>
                        <td>An HTML memory game</td>
                        <td>
                            <a href="../projects/shapeScroller/start.html">shape_scroller</a>
                        </td>
                    </tr>
                    <tr>
                        <td>Demonstrates the use of buttons to move, show, rotate, and resize an element on the canvas
                        </td>
                        <td>
                            <a href="../projects/moving_sprite/moving_sprite.html">moving_sprite</a>
                        </td>
                    </tr>
                    <tr>
                        <td>Demonstrates an element following mouse movement</td>
                        <td>
                            <a href="../projects/follow_mouse/follow_mouse.html">follow_mouse</a>
                        </td>
                    </tr>
                    <tr>
                        <td>Demonstrates an element following touch movement</td>
                        <td>
                            <a href="../projects/follow_touch/follow_touch.html">follow_touch</a>
                        </td>
                    </tr>
                    <tr>
                        <td>Using keyboard controls, have an element colliding with other elements within the canvas
                        </td>
                        <td>
                            <a href="../projects/collision_keyboard/collision_keyboard.html">collision_keyboard</a>
                        </td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
@endsection('content')