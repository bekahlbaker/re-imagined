<?php
namespace feedthemfacebook;
/**
 * Class FTS Error Handler
 *
 * @package feedthemsocial
 */
class fts_error_handler
{
    /**
     * @var string
     */
    public $output = "";

    /**
     * Construct
     *
     * Error Handler constructor.
     *
     * @since 1.0.0
     */
    function __construct()
    {
     //   $this->fts_plugin_version_check();
    }

    /**
     * Facebook Error Check
     *
     * @param $FB_Shortcode
     * @param $feed_data
     * @return array
     * @since 1.0.0
     */
    function facebook_error_check($FB_Shortcode, $feed_data)
    {
        // return error if no data retreived
        try {
            if (!isset($feed_data->data) || empty($feed_data->data)) {
                //Solution Text
                $solution_text = 'Here are some possible solutions to fix the error.';
                //ID Error
                if (isset($feed_data->error) && $feed_data->error->code == 803) {
                    if (strpos($feed_data->error->message, '(#803) Cannot query users by their username') !== false || $FB_Shortcode['type'] == 'group') {
                        throw new \Exception('<div style="clear:both; padding:15px 0;">#' . $feed_data->error->code . '.2 - Cannot query users by their username. <a style="color:red !important;" href="https://www.slickremix.com/docs/facebook-error-messages/#error-803-2" target="_blank">' . $solution_text . '</a></div>');
                    } else {
                        throw new \Exception('<div style="clear:both; padding:15px 0;">#' . $feed_data->error->code . ' - Facebook cannot find this ID. <a style="color:red !important;" href="https://www.slickremix.com/docs/facebook-error-messages/#error-803" target="_blank">' . $solution_text . '</a></div>');
                    }
                } elseif (isset($feed_data->error) && ($feed_data->error->code == 341 || $feed_data->error->code == 4 || $feed_data->error->code == 17)) {
                    throw new \Exception('<div style="clear:both; padding:15px 0;">#' . $feed_data->error->code . ' - Too many calls made to Facebook. <a style="color:red !important;"href="https://www.slickremix.com/docs/facebook-error-messages/#error-rate-limiting" target="_blank">' . $solution_text . '</a></div>');
                } elseif (isset($feed_data->error) && $feed_data->error->code == 190) {
                    throw new \Exception('<div style="clear:both; padding:15px 0;">#' . $feed_data->error->code . ' - Error validating application. Invalid application ID. <a style="color:red !important;"href="https://www.slickremix.com/docs/facebook-error-messages/#error-invalid-app-id" target="_blank">' . $solution_text . '</a></div>');
                } elseif (isset($feed_data->error) && $feed_data->error->code == 104) {
                    throw new \Exception('<div style="clear:both; padding:15px 0;">#' . $feed_data->error->code . ' - An access token is required to request this resource. <a style="color:red !important;"href="https://www.slickremix.com/docs/facebook-error-messages/#error-access-token-required" target="_blank">' . $solution_text . '</a></div>');
                } elseif (isset($feed_data->error) && $feed_data->error->code == 210) {
                    throw new \Exception('<div style="clear:both; padding:15px 0;">#' . $feed_data->error->code . ' - This call requires a Page access token. <a style="color:red !important;"href="https://www.slickremix.com/docs/facebook-error-messages/#error-access-token-required" target="_blank">' . $solution_text . '</a></div>');
                } elseif (isset($feed_data->error) && $feed_data->error->code == 100) {
                    throw new \Exception('<div style="clear:both; padding:15px 0;">#' . $feed_data->error->code . ' - This Page may not be public. <a style="color:red !important;"href="http://www.slickremix.com/docs/facebook-error-messages/#error-100" target="_blank">' . $solution_text . '</a></div>');
                } elseif ($FB_Shortcode['type'] == 'group' && isset($feed_data->error) && $feed_data->error->code == 1) {
                    $solution_text = 'Please view this link for a temporary solution.';
                    throw new \Exception('<div style="clear:both; padding:15px 0;">#' . $feed_data->error->code . ' - The group feed is experiencing a known error at this time. <a style="color:red !important;"href="http://www.slickremix.com/docs/facebook-error-messages/#group-feed-error-pinned-post" target="_blank">' . $solution_text . '</a></div>');
                } //Rate Limit Exceeded
                elseif ($FB_Shortcode['type'] == 'reviews' && (empty($feed_data->data) || !isset($feed_data->data))) {
                    throw new \Exception('<div style="clear:both; padding:15px 0;">No Reviews Found or You may not have Admin Permissions for this page. <a style="color:red !important;"href="https://www.slickremix.com/docs/facebook-error-messages/#error-no-reviews" target="_blank">' . $solution_text . '</a></div>');
                } //If Custom Exception is not needed but still error then throw ugly error.
                elseif (isset($feed_data->error)) {
                    if (isset($feed_data->error->message)) $output = 'Error: ' . $feed_data->error->message;
                    if (isset($feed_data->error->type)) $output .= '<br />Type: ' . $feed_data->error->type;
                    if (isset($feed_data->error->code)) $output .= '<br />Code: ' . $feed_data->error->code;
                    if (isset($feed_data->error->error_subcode)) $output .= '<br />Subcode:' . $feed_data->error->error_subcode;
                    //If just code.
                    if (isset($feed_data->error_msg)) $output = 'Error: ' . $feed_data->error_msg;
                    if (isset($feed_data->error_code)) $output .= '<br />Code: ' . $feed_data->error_code;
                    throw new \Exception('<div style="clear:both; padding:15px 0;">' . $output . '</div>');
                }
            }
        } catch (\Exception $e) {
            return array(true, $e->getMessage());
        }
    }
}
?>