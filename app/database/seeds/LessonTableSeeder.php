<?php 

class LessonTableSeeder extends Seeder {

    public function run()
    {

        $lesson = new Lesson();
        $lesson->name = 'lesson1';
        $lesson->category = 'html';
        $lesson->link = 'https://google.com';
        $lesson->yt_id = 'kfchvCyHmsc';
        $lesson->summary = 'lkjhkjh';
        $lesson->save();

        $lesson = new Lesson();
        $lesson->name = 'lesson2';
        $lesson->category = 'html';
        $lesson->link = 'https://yahoo.com';
        $lesson->yt_id = 'suKW5E93xgw';
        $lesson->summary = "

<!--Title -->
<div>
    <div>
        <h1>
            HTML
        </h1>
    </div> <!--end col -->
</div> <!--end row -->

<!-- Sub Title -->
<div>
    <div>
        <p>
            Using HTML to create our 'Magical Story Page'.
        </p>
    </div> <!--end col -->
</div> <!--end row -->

<!-- doctype -->
<div class ='row'>
    <div>
        <div>
            <h3>
                &lt;!DOCTYPE html&gt;
            </h3>
            <p>
            In the previous lesson we mentioned that HTML is like a story. We have special places
            we must use to fill in areas we want our story. We can start with letting our electronic 
            devices know that we are using HTML5.  We can do this by typing out : &lt;!DOCTYPE html&gt;
            onto our special editor. This is letting the electronic device know what 'magic language' we 
            are using to write our story.
            </p> <!--end doctype p -->
        </div> <!--end doctype -->
        
        <div>
            <img src='/img/example1.png'>
        </div> <!--end monkey/col -->
    </div> <!-- end col -->
</div> <!-- end row -->

<!-- html -->
<div>
    <div>
        <div>
            <h3>
                &lt;html&gt; 
            </h3>
            <p>
            The next step we need to complete is starting the story. Think of what I describe to be a 'magical paper' we 
            would write on. To create this 'magical paper' We need to put &lt;html&gt; under our &lt;!DOCTYPE html&gt;. 
            We add this here because it will be the start of our 'magical paper'.
            </p> <!--end html open p -->
        </div> <!--end html open -->
        
        <div>
            <img src='/img/example2.png'>
        </div> <!--end monkey/col -->
    </div> <!-- end col -->
</div> <!-- end row -->

<!-- head,title,/title,/head -->
<div>
    <div>
        <div>
            <h3>
                &lt;head&gt; , &lt;title&gt; , &lt;/title&gt; , &lt;/head&gt; 
            </h3>
            <p>
            Next we will put a &lt;head&gt; under our &lt;html&gt;. This is the 'magical white space', like at the top of your notebook paper you use at school.
            Now that we made the 'magical space', we need to fill it right? This is where we can Name our Story. We will use &lt;title&gt;to open up the
            'magical area' and fill it in with our story's name when the time comes. For now let us leave it blank and add a &lt;/title&gt; under it. 
            This will close our 'magical portal' for the story's name. 
            Under that 'magical portal' we will type out &lt;/head&gt;. This will close our 'magical white space portal' at the top of our 'magical paper'.
            </p> <!--end head p -->
        </div> <!--end head -->
        
        <div>
            <img src='/img/example5.png'>
        </div> <!--end monkey/col --> 
    </div> <!-- end col -->
</div> <!-- end row -->

<!-- body, /body -->   
<div>
    <div>
        <div>
            <h3>
                &lt;body&gt; , &lt;/body&gt;
            </h3>
            <p>
            So by now we have a 'magical' : language, paper with a top. We need to make an area for our story to go. 
            We do this by adding &lt;body&gt;under the 'portal' above.  This is where we will write out our awesome story so 
            the world can see. Just like before we need to close our 'portal'. We close our 'magical portal' by using &lt;/body&gt;. 
            This allows our story to stay where we need it and not get away. 
            </p> <!--end body p -->
        </div> <!--end body -->
        
        <div>
            <img src='/img/example7.png'>
        </div> <!--end monkey/col -->
    </div> <!-- end col --> 
</div> <!-- end of row --> 

<!-- /html -->
<div>
    <div>
        <div>
            <h3>
                &lt;/html&gt;
            </h3>
            <p>
            Lastly we need to close our 'magic page portal'. This is done so by putting a &lt;/html&gt; under the 'portal' above. 
            This lets all the electronic devices that we are done with our story and our page ends here. 
            </p> <!--end html close p -->
        </div> <!--end html close -->
        
        <div>
            <img src='/img/example8.png'>
        </div> <!--end monkey/col -->
    </div> <!-- end col -->
</div> <!-- end row -->";

        $lesson->save();

        $lesson = new Lesson();
        $lesson->name = 'lesson3';
        $lesson->category = 'html';
        $lesson->link = 'https://github.com';
        $lesson->yt_id = 'kfchvCyHmsc';
        $lesson->summary = 'lkjsdfhkljsadh';
        $lesson->save();

        $lesson = new Lesson();
        $lesson->name = 'lesson1';
        $lesson->category = 'css';
        $lesson->link = 'https://reddit.com';
        $lesson->yt_id = 'FGXDKrUoVrw';
        $lesson->summary = 'lkjsdfhkljsadh';
        $lesson->save();

        $lesson = new Lesson();
        $lesson->name = 'lesson2';
        $lesson->category = 'css';
        $lesson->link = 'https://facebook.com';
        $lesson->yt_id = 'FGXDKrUoVrw';
        $lesson->summary = 'lkjsdfhkljsadh';
        $lesson->save();

        $lesson = new Lesson();
        $lesson->name = 'lesson3';
        $lesson->category = 'css';
        $lesson->link = 'https://nba.com';
        $lesson->yt_id = 'FGXDKrUoVrw';
        $lesson->summary = 'lkjsdfhkljsadh';
        $lesson->save();
    
        $lesson = new Lesson();
        $lesson->name = 'lesson1';
        $lesson->category = 'php';
        $lesson->link = 'https://reddit.com';
        $lesson->yt_id = '8HlqSrCazqo';
        $lesson->summary = 'lkjsdfhkljsadh';
        $lesson->save();

        $lesson = new Lesson();
        $lesson->name = 'lesson2';
        $lesson->category = 'php';
        $lesson->link = 'https://facebook.com';
        $lesson->yt_id = '8HlqSrCazqo';
        $lesson->summary = 'lkjsdfhkljsadh';
        $lesson->save();

        $lesson = new Lesson();
        $lesson->name = 'lesson3';
        $lesson->category = 'php';
        $lesson->link = 'https://nba.com';
        $lesson->yt_id = '8HlqSrCazqo';
        $lesson->summary = 'lkjsdfhkljsadh';
        $lesson->save();
    }

}