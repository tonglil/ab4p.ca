<?php
$this->layout('template', [
    'title' => null,
]);
?>

<h1 class="title">
    Biography
</h1>

<div>
    <p>
        Welcome to my campaign website for the AMS Presidential Election!
    </p>

    <p>
        My name is Aaron Bailey, and I am a fourth year UBC Science student from Niagara Falls, Ontario.
        After spending four years getting to know this awesome campus and our student society, I'm looking to use my experience to bring the AMS away from a culture of inane seriousness to a place that better represents the vibrant, energetic, and fun community that we all belong to.
    </p>

    <p>
        The AMS President exists to be the driver of an effective student Society, a strong amplifier of the student voice, and a passionate visionary for the future of the AMS.
        I am running to be the 106th AMS President because I believe our Society is severely lacking this type of leader and that this is hurting UBC students.
    </p>

    <p>
        If you'd like to learn more about me and <a class="strong" href="sotsu#body">my vision</a> for a more genuine AMS, click through <a class="strong" href="about#body">my relevant experience</a> and <a class="strong" href="president#body">tangible goals</a> for my term in office.
    </p>

    <p>
        Remember to vote Aaron Bailey for AMS President between March 9th and 13th!
    </p>
</div>

<div class="text-center">
    <img id="logo" src="assets/img/logo.jpg">
</div>

<hr>

<div class="row">
    <div class="col-md-4">
        <h2 class="fit">
            State of the Student Union
        </h2>
        <p>
            Listen to my description of what is wrong with the AMS, and how the right leader can make a difference.
        </p>
        <p>
            <a class="btn btn-custom" href="sotsu#body" role="button">View details &raquo;</a>
        </p>
    </div>

    <div class="col-md-4">
        <h2>
            Presidential Goals
        </h2>
        <p>
            See the six tangible goals I have set for my presidential term in office.
        </p>
        <p>
            <a class="btn btn-custom" href="president#body" role="button">View details &raquo;</a>
        </p>
    </div>

    <div class="col-md-4">
        <h2>
            Senate Platform
        </h2>
        <p>
            Read my three action items for my second term on the UBC Senate.
        </p>
        <p>
            <a class="btn btn-custom" href="senate#body" role="button">View details &raquo;</a>
        </p>
    </div>
</div>

<hr>

<?php echo $this->fetch('partials/endorsements_2'); ?>
<?php echo $this->fetch('partials/endorsements'); ?>
