<?php
if (!defined('ABSPATH'))
    exit; // Exit if accessed directly

class Custom_Elementor_Widget extends \Elementor\Widget_Base
{

    public function get_name()
    {
        return 'custom_elementor_widget';
    }

    public function get_title()
    {
        return __('Custom Review Card', 'a2n-text-domain');
    }

    public function get_icon()
    {
        return 'eicon-posts-grid';
    }

    public function get_categories()
    {
        return ['basic'];
    }

    protected function _register_controls()
    {

        $this->start_controls_section(
            'content_section',
            [
                'label' => __('Reviews Content', 'a2n-text-domain'),
                'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
            ]
        );

        $this->add_control(
            'course_image',
            [
                'label' => __('Choose Course Image', 'a2n-text-domain'),
                'type' => \Elementor\Controls_Manager::MEDIA,
                'default' => [
                    'url' => \Elementor\Utils::get_placeholder_image_src(),
                ],
            ]
        );

        $this->add_control(
            'course_title',
            [
                'label' => __('Course Title', 'a2n-text-domain'),
                'type' => \Elementor\Controls_Manager::TEXT,
                'placeholder' => __('course title here', 'a2n-text-domain'),
            ]
        );

        $this->add_control(
            'course_url',
            [
                'label' => __('Course Link', 'a2n-text-domain'),
                'type' => \Elementor\Controls_Manager::URL,
                'placeholder' => __('https://example.com', 'a2n-text-domain'),
                'default' => [
                    'url' => '',
                    'is_external' => '',
                    'nofollow' => '',
                ],
                'show_external' => true,
            ]
        );


        $this->add_control(
            'review_text',
            [
                'label' => __('Review text', 'a2n-text-domain'),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'placeholder' => __('Review text here', 'a2n-text-domain'),
            ]
        );

        $this->add_control(
            'user_name',
            [
                'label' => __('User Name', 'a2n-text-domain'),
                'type' => \Elementor\Controls_Manager::TEXT,
                'placeholder' => __('Tyler Walters', 'a2n-text-domain'),
            ]
        );


        $this->add_control(
            'rating_value',
            [
                'label' => __('Rating Value', 'a2n-text-domain'),
                'type' => \Elementor\Controls_Manager::NUMBER,
                'min' => 1,
                'max' => 5,
                'step' => 1,
                'default' => 5,
            ]
        );


        $this->end_controls_section();
    }

    protected function render()
    {
        $settings = $this->get_settings_for_display();
        $percentage = ($settings['rating_value'] / 5) * 100;

        $url = $settings['course_url']['url'];
        $is_external = $settings['course_url']['is_external'] ? ' target="_blank"' : '';
        $nofollow = $settings['course_url']['nofollow'] ? ' rel="nofollow"' : '';
        ?>
        <div class="a2n-review_card">
            <div class="a2n_course_details">
                <div class="course_img">
                    <a href="<?php echo esc_url($url); ?>">
                        <img src="<?php echo $settings['course_image']['url']; ?>" alt="course" />
                    </a>
                </div>
                <h2 class="course_title">
                    <a href="<?php echo esc_url($url); ?>" <?php echo $is_external . $nofollow; ?>>
                        <?php echo $settings['course_title']; ?>
                    </a>
                </h2>
            </div>
            <div class="review_contents">
                <p><?php echo $settings['review_text']; ?></p>
                <h5 class="user_name"><?php echo $settings['user_name']; ?></h5>
                <div class="a2n_meta_details">
                    <div class="a2n-ratings-container bp_blank_stars">
                        <div style="width: <?php echo $percentage; ?>%" class="bp_filled_stars"></div>
                    </div>
                    <h6><span><?php echo $settings['rating_value']; ?></span> Rating</h6>
                </div>
            </div>
        </div>
        <?php
    }
}
