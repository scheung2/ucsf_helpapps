<?php
include 'include/header.php';
include 'include/analyticstracking.php';
?>
<style>
    td:hover{
        text-decoration: underline;
    }
</style>
<div class="row row--demo">
    <div class="columns three three--phone"> </div>
    <div class="columns six six--phone">
        <h2>UCSF Help Applications</h2>
        <table class="table table--bordered">
            <tbody>
                <tr>
                    <td><div><a href="EmailHelper.php">Retrieve User ID</a></div></td>
                </tr>
                <tr>
                    <td><div><a href="hbs_access.php">Request HBS Access</a></div></td>
                </tr>
                <tr>
                    <td><div><a href="hbs_update.php">Request HBS Update</a></div></td>
                </tr>
                <tr>
                    <td><div><a href="ipNetVerify.php">Verify VPN Access</a></div></td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
<p>&nbsp;</p>
<p>&nbsp;</p>
<?php
include 'include/footer.php';
?>