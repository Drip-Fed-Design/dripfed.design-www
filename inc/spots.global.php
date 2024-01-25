<?
function functionRemainingSpots($n)
{
    if ($n === 0) {
        echo '<h5>All spots filled</h5>';
    } else if ($n === 1) {
        echo '<h5>Hurry, ' . $n . ' spot left</h5>';
    } else {
        echo '<h5>' . $n . ' spots left</h5>';
    }
}
