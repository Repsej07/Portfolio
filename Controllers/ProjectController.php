<?php

class ProjectController extends BaseController
{
    public static function sony()
    {
        $sub_image = "views/assets/Jesper/blocks/Project.1/project.1.sub-image.sony.svg";
        $main_pr_image = "views/assets/Jesper/blocks/Project.1/Project.1.main.image.png";
        $title_project = "My role in Sony";
        $content1_project = "At Sony Benelux i am a Shop in Shop manager, i am fully responsible
        for the sales and the stock inside my store, I have worked in 4
        different stores since march 2024. I make sure that the store 
        employees have all the information they need to sell  my products.
        These products can range from small bluetooth speakers 
        all the way to enormous televisions. ";
        $sub_header_project_1 = "The challenges";
        $content2_project = 
        "In my Field of work there are a lot of different challenges, in my work
        at Sony its my responsibility to come up with the quickest and 
        cheapest solution to the diverse challenges. 
        For example in July we had a major stock issue at Sony, but 
        customers still wanted the products. The big problem was at the
        Holding company which distributes the stock to the different stores
        so the problem was thaxt I did not have the stock in store for the 
        customers. So I Figured out a way to create backorders 
        and force Holding to send stock to my store. the biggest problem
        was thinking of a way that was cheap, and still in agreement 
        with the regulations i had to follow. 
        This is a example of a challenge I have to go up against during my
        work.";
        $sub_header_project_2 = "Achievements";
        $content3_project = 
        "I have achieved quite a lot during my time at Sony, as of writing this 
        i have achieved the title of Salesman of the month twice. And i have 
        had the pleasure of a visit from the Managing partners of Sony 
        Europe in my most successful store. This was because of my 
        excellent IHS(In house share), Which was very consistent by being
        between the 25 and 30% for months. While other stores had a 
        IHS being more in the Neighborhood of 5-10%. ";
        $sub_header_project_3 = "Conclusion";
        $content4_project = 
        "I am always learning and still learning, the goal for me at Sony is 
        to be able to become an all round sales man. This means that i can
        sell in the east of the country just as good as i could do in the West 
        or the South. This is a complicated thing because of the diverse 
        set of people in the Netherlands. After i have achieved this 
        I am planning to move up in the company. ";
        //database variables these are presets for now to make sure the styling is there
        $content_array = [$sub_image, $main_pr_image, $title_project, $content1_project, $sub_header_project_1, $content2_project, $sub_header_project_2, $content3_project, $sub_header_project_3, $content4_project];
        parent::redirect('project', $content_array);
    }

    // public static function projectchoice($args)
    // {

    //     switch (strtolower($args[0])) {
    //         case 'sony':
    //             return self::Sony();
    //         default:
    //             return null;
    //     }
    // }
}
