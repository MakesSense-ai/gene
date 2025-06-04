<?php

function get_assessment_questions() {
    return [
        [
            "question" => "When faced with a critical project, my primary instinct is to:",
            "options" => [
                "a" => "Take full control of all key tasks to ensure they are done to my standards, as I can usually execute them best.",
                "b" => "Clearly define the tasks, set up a system of rewards for meeting targets, and closely monitor progress, stepping in when issues arise.",
                "c" => "Develop a comprehensive strategic plan, outline the future impact, and then delegate responsibilities to my team to execute.",
                "d" => "Focus on identifying the right people for the project, provide them with the resources and support they need, and coach them through challenges to help them grow.",
                "e" => "Empower a capable leader or team to own the project, ensuring they have the autonomy and support to drive success and, in turn, develop other leaders through the process."
            ]
        ],
        [
            "question" => "My approach to team development and delegation is best described as:",
            "options" => [
                "a" => "I prefer to handle most important tasks myself; it's often quicker and ensures quality. Delegation is risky.",
                "b" => "I delegate tasks with clear instructions and incentives, but I maintain oversight to ensure efficiency and correct mistakes promptly.",
                "c" => "I delegate based on strategic roles, but sometimes find myself pulled back into the details if execution falters or if the team isn't fully aligned.",
                "d" => "I actively invest time in mentoring my team members, identifying their strengths, and providing opportunities for them to take on more responsibility and develop new skills.",
                "e" => "My main focus is on cultivating other leaders who can then develop their own teams, creating a cascading effect of growth and capability throughout the organization."
            ]
        ],
        [
            "question" => "When considering the future of my organization, I primarily focus on:",
            "options" => [
                "a" => "Maintaining stability and control over current operations; the future will take care of itself if today is managed well.",
                "b" => "Achieving predictable results and meeting short-term targets through efficient processes and clear performance metrics.",
                "c" => "Crafting a long-term vision and strategic roadmap, and communicating this to the team to guide our efforts in navigating change.",
                "d" => "Building a strong, adaptable team that is equipped to handle future challenges and opportunities, fostering their growth alongside the company's.",
                "e" => "Creating an environment where innovation thrives, new leaders emerge organically, and the organization's impact expands exponentially through the success of its people."
            ]
        ],
        [
            "question" => "If a team member makes a significant mistake, my typical response is to:",
            "options" => [
                "a" => "Step in immediately, fix the mistake myself, and make a mental note to supervise that person more closely on similar tasks.",
                "b" => "Address the mistake based on pre-defined consequences, ensure the process is corrected, and emphasize the importance of following procedures.",
                "c" => "Analyze how the mistake impacts our strategic goals, discuss the lessons learned, and adjust plans or provide additional training as needed.",
                "d" => "View it as a learning opportunity for the team member, discuss what happened, what could be done differently, and support them in finding a solution and growing from the experience.",
                "e" => "Encourage the team and their direct leader to analyze the root cause, learn from it, and strengthen their own problem-solving and decision-making processes for the future, seeing it as a system-strengthening opportunity."
            ]
        ],
        [
            "question" => "My philosophy on team meetings and communication is generally:",
            "options" => [
                "a" => "Meetings are for me to disseminate information and ensure everyone knows what I expect them to do.",
                "b" => "Meetings are structured to review progress against targets, identify deviations, and assign corrective actions.",
                "c" => "Meetings are for strategic alignment, discussing future plans, and ensuring everyone understands their role in the bigger picture, though sometimes they can get bogged down in operational details.",
                "d" => "Meetings are a key opportunity for collaborative problem-solving, sharing insights, and fostering team cohesion and individual development.",
                "e" => "Meetings are platforms for leaders I'm developing to shine, to facilitate strategic discussions, and to foster a culture where everyone contributes to multiplying our collective impact."
            ]
        ],
        [
            "question" => "When it comes to innovation and new ideas:",
            "options" => [
                "a" => "I prefer sticking to proven methods; innovation often brings unnecessary risks and disruptions.",
                "b" => "I am open to new ideas if they have a clear, measurable benefit and fit within our existing structures and reward systems.",
                "c" => "I encourage strategic thinking and planning for future innovations, but the implementation can sometimes be a bottleneck if not perfectly planned.",
                "d" => "I actively foster an environment where team members feel safe to experiment, suggest new ideas, and even fail, as long as we learn and grow from it.",
                "e" => "I champion a culture where innovation is a natural byproduct of empowered teams and diverse thinking, leading to breakthroughs that multiply our success."
            ]
        ],
        [
            "question" => "My approach to empowering my team is:",
            "options" => [
                "a" => "I empower them by giving very clear instructions on what needs to be done and how I want it done.",
                "b" => "I empower them with the tools and incentives to meet specific, measurable goals I've set.",
                "c" => "I empower them by sharing the strategic vision and trusting them to execute their parts, though I monitor to ensure strategic alignment.",
                "d" => "I empower them by investing in their skills, giving them autonomy over their work, and creating opportunities for them to lead and make decisions.",
                "e" => "I empower them by creating other multipliers – leaders who themselves empower their teams, fostering a widespread culture of ownership and initiative."
            ]
        ],
        [
            "question" => "When I think about my legacy as a leader, I want to be known for:",
            "options" => [
                "a" => "Building a stable and efficient operation that runs smoothly under my direct control.",
                "b" => "Consistently delivering results and creating highly effective systems and processes.",
                "c" => "Successfully navigating the company through significant changes and positioning it for future success through strategic planning.",
                "d" => "Developing a highly capable and loyal team where individuals have grown significantly under my guidance.",
                "e" => "Creating a thriving ecosystem of leaders who continue to multiply success and impact long after I'm gone."
            ]
        ],
        [
            "question" => "If my organization is facing a significant capability gap, my first step is to:",
            "options" => [
                "a" => "Personally take on the critical tasks that fall within that gap to ensure they are handled correctly.",
                "b" => "Implement a new process or system to manage the gap and reward those who adapt quickly.",
                "c" => "Re-evaluate our strategic plan to see how the gap impacts our long-term objectives and adjust resource allocation accordingly.",
                "d" => "Invest in targeted training and development for the existing team, or hire individuals with the specific skills needed, focusing on their integration and growth.",
                "e" => "Empower my leadership team to identify and address the capability gap within their areas, fostering a culture of continuous improvement and shared responsibility for talent development."
            ]
        ],
        [
            "question" => "Success for me as a leader is primarily defined by:",
            "options" => [
                "a" => "The flawless execution of tasks under my direct supervision and the achievement of my personal standards.",
                "b" => "Meeting or exceeding performance targets through well-defined processes and clear accountability.",
                "c" => "Achieving our long-term strategic objectives and successfully adapting to market changes.",
                "d" => "The growth and development of my team members and the strength of the team we've built together.",
                "e" => "The success achieved by those I've empowered and the compounding impact our organization has because of the leaders we've cultivated."
            ]
        ]
    ];
}

function get_leadership_level_details() {
    // This data is from leadership_research.md
    return [
        "a" => [
            "level_name" => "Anti-Leader",
            "tagline" => "I control everything because I know best.",
            "description" => "The Anti-Leader often centralizes control, believing their way is the most effective. This can lead to micromanagement and a lack of empowerment within the team, potentially stifling growth and initiative.",
            "bottlenecks" => [
                "Micromanagement: Involving themselves in every decision and task.",
                "Lack of Delegation: Reluctance to delegate, becoming a central point for all decisions.",
                "Poor Prioritization: Lack of clear priorities leading to confusion.",
                "Resistance to Adaptation: Refusal to adopt new processes or technologies.",
                "Insufficient Resource Provision: Failing to provide necessary resources or support.",
                "Poor Communication: Ineffective or unclear instructions."
            ],
            "quick_wins" => [
                "Identify one task to delegate this week and trust your team member with it.",
                "Define and clearly communicate the top 3 priorities for your team for the next month.",
                "Schedule a brief meeting to discuss one outdated process and genuinely solicit ideas for improvement."
            ],
            "long_term_benefits" => [
                "Increased team empowerment, ownership, and morale.",
                "Improved operational efficiency and productivity as you focus on higher-level tasks.",
                "Greater capacity for strategic thinking and fostering innovation within the team."
            ]
        ],
        "b" => [
            "level_name" => "Transactional Leader",
            "tagline" => "I can do it better and faster than anyone else.",
            "description" => "The Transactional Leader focuses on systems, processes, and clear exchanges of reward for performance. While efficient, this style can sometimes limit creativity and proactive problem-solving if not balanced with empowerment.",
            "bottlenecks" => [
                "Over-reliance on Systems, Lack of Flexibility: Can stifle creativity and adaptability.",
                "Limited Employee Development: Reliance on external motivators can limit initiative.",
                "Reactive Problem Solving: Often addresses issues only after they arise.",
                "Focus on Short-Term Results: Can overshadow long-term vision and relationship building.",
                "Potential for Demotivation: If reward systems are perceived as unfair or pressure is too high.",
                "Communication Primarily Directive: Can limit feedback and collaboration."
            ],
            "quick_wins" => [
                "Identify one area where your team can experiment with a new approach, even if it deviates slightly from the established process.",
                "Actively solicit feedback from your team on current processes and reward systems this week.",
                "Delegate a task with full autonomy, focusing on the desired outcome rather than prescribing the exact method."
            ],
            "long_term_benefits" => [
                "Increased employee engagement, innovation, and proactive problem-solving.",
                "Development of a more adaptable, resilient, and skilled team.",
                "Greater leader capacity as delegation becomes more effective and trust builds."
            ]
        ],
        "c" => [
            "level_name" => "Strategic Leader",
            "tagline" => "I navigate change and plan for the future.",
            "description" => "The Strategic Leader excels at envisioning the future and planning the roadmap. The challenge often lies in consistently translating that strategy into aligned action and ensuring the team is fully equipped and motivated to execute.",
            "bottlenecks" => [
                "Ineffective Communication of Vision: Difficulty in making the vision compelling and shared.",
                "Lack of Accountability Systems: Failing to implement robust systems for tracking strategic execution.",
                "Executive Misalignment: Key players not being on the same page regarding strategic decisions.",
                "Unclear or Uninspiring Vision: Vision may be too generic or not resonate with the team.",
                "Getting Bogged Down in Operations: Difficulty dedicating enough time to high-level strategy.",
                "Poor Execution of Strategic Plans: Challenges in disciplined execution and follow-through."
            ],
            "quick_wins" => [
                "Schedule a session to clearly articulate the company vision and ask three team members to explain what it means to them and their role.",
                "Identify one key strategic initiative and define clear, measurable activities and a scoreboard to track its progress this quarter.",
                "Review compensation or recognition for one key team/role to ensure it directly aligns with strategic objectives."
            ],
            "long_term_benefits" => [
                "A highly engaged team that understands, believes in, and is motivated by the company vision.",
                "Improved execution of strategic initiatives and consistent achievement of long-term goals.",
                "Stronger executive alignment and unified effort towards common objectives, enhancing organizational agility."
            ]
        ],
        "d" => [
            "level_name" => "Exceptional Leader",
            "tagline" => "I develop others and build a strong team.",
            "description" => "The Exceptional Leader understands that their success is tied to the growth and capability of their team. They actively mentor, empower, and create opportunities for others to shine and develop.",
            "bottlenecks" => [
                "Failure to Hire Potential Successors/Better Talent: Insecurity may limit hiring top talent.",
                "Overlooking Intellectual Curiosity for Leadership Potential: Focusing on personality over substance.",
                "Lack of Intentionality and Systems for Development: Assuming development happens by osmosis.",
                "Insufficient Assessment, Encouragement, and Compensation for Developing Leaders.",
                "Organizational Culture Not Supporting Leadership Development: Not embedded as a core value.",
                "Closing the Capability Gap: Difficulty in systematically identifying and closing skill gaps."
            ],
            "quick_wins" => [
                "Identify one high-potential individual and co-create a specific 3-month development plan with them, including mentorship and a stretch assignment.",
                "Review the criteria for your next leadership hire to explicitly include intellectual curiosity and a track record of developing others.",
                "In the next team meeting, publicly acknowledge and specifically praise an instance of effective leadership or skill development demonstrated by a team member."
            ],
            "long_term_benefits" => [
                "Creation of a robust internal leadership pipeline, ensuring business continuity and growth.",
                "A culture of continuous learning and development, leading to higher engagement and retention of top talent.",
                "Increased organizational capacity and effectiveness as more leaders emerge and contribute at higher levels."
            ]
        ],
        "e" => [
            "level_name" => "Compound Leader",
            "tagline" => "I multiply my impact through others' success.",
            "description" => "The Compound Leader focuses on creating an ecosystem where leadership and success are multiplied throughout the organization. They build other leaders who, in turn, build more leaders, creating a sustainable and exponentially growing impact.",
            "bottlenecks" => [
                "Scaling the Multiplier Effect: Ensuring consistent adoption of multiplier principles organization-wide.",
                "Maintaining a Growth and Learning Culture: Complacency can set in as the organization grows.",
                "Ensuring True Cognitive Diversity and Inclusion: Moving beyond surface-level diversity at scale.",
                "Preventing Silos and Maintaining Cohesion: More complex as impact multiplies through teams.",
                "Leader Becoming a Bottleneck (Ironically): If systems for high-level decision-making aren't fully empowered.",
                "Synchronizing Leadership and Culture During Crises/Change: Maintaining culture while adapting."
            ],
            "quick_wins" => [
                "Identify one emerging leader and mentor them specifically on multiplier principles, tasking them with applying these in their own team and reporting back on the impact.",
                "Initiate a cross-functional project specifically designed to break down potential silos and foster collaboration between different multiplied teams, led by developing leaders.",
                "Ask for candid feedback from your direct leadership team on how effectively the multiplier culture is being cascaded and where the systemic gaps might be."
            ],
            "long_term_benefits" => [
                "Exponential organizational growth and impact, far exceeding what the leader could achieve alone.",
                "A deeply embedded, self-sustaining culture of empowerment, innovation, and continuous improvement.",
                "High levels of employee engagement, loyalty, and attraction of top talent who seek growth environments.",
                "The organization becomes a recognized leader and a benchmark for positive, impactful culture, creating a lasting legacy."
            ]
        ]
    ];
}

?>
