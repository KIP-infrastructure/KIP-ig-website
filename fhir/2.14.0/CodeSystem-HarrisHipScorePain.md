# Harris Hip Score (HHS) - Pain - KIP Infrastructure v2.14.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Harris Hip Score (HHS) - Pain**

## CodeSystem: Harris Hip Score (HHS) - Pain 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/CodeSystem/HarrisHipScorePain | *Version*:2.14.0 |
| Active as of 2022-07-06 | *Computable Name*:HarrisHipScorePain |

 
Harris Hip Score (HHS) - Pain. Link: https://www.orthopaedicscore.com/scorepages/harris_hip_score.html 

 This Code system is referenced in the content logical definition of the following value sets: 

* [HarrisHipScoreSmerter](ValueSet-HarrisHipScoreSmerter.md)



## Resource Content

```json
{
  "resourceType" : "CodeSystem",
  "id" : "HarrisHipScorePain",
  "url" : "https://kip.rkkp.dk/fhir/CodeSystem/HarrisHipScorePain",
  "version" : "2.14.0",
  "name" : "HarrisHipScorePain",
  "title" : "Harris Hip Score (HHS) - Pain",
  "status" : "active",
  "date" : "2022-07-06T00:00:00+02:00",
  "publisher" : "Sundhedsvæsenets Kvalitetsinstitut with Trifork Digital Health A/S",
  "contact" : [
    {
      "name" : "Sundhedsvæsenets Kvalitetsinstitut with Trifork Digital Health A/S",
      "telecom" : [
        {
          "system" : "url",
          "value" : "https://trifork.com"
        },
        {
          "system" : "email",
          "value" : "rbk@trifork.com"
        }
      ]
    }
  ],
  "description" : "Harris Hip Score (HHS) - Pain. Link: https://www.orthopaedicscore.com/scorepages/harris_hip_score.html",
  "caseSensitive" : false,
  "content" : "complete",
  "count" : 6,
  "concept" : [
    {
      "code" : "44",
      "display" : "None, or ignores it",
      "definition" : "None, or ignores it (44)"
    },
    {
      "code" : "40",
      "display" : "Slight, occasional, no compromise in activity",
      "definition" : "Slight, occasional, no compromise in activity (40)"
    },
    {
      "code" : "30",
      "display" : "Mild pain, no effect on average activities, rarely moderate pain with unusual activity, may take aspirin",
      "definition" : "Mild pain, no effect on average activities, rarely moderate pain with unusual activity, may take aspirin (30)"
    },
    {
      "code" : "20",
      "display" : "Moderate pain, tolerable but makes concessions to pain. Some limitations of ordinary activity or work. May require occasional pain medication stronger than aspirin",
      "definition" : "Moderate pain, tolerable but makes concessions to pain. Some limitations of ordinary activity or work. May require occasional pain medication stronger than aspirin (20)"
    },
    {
      "code" : "10",
      "display" : "Marked pain, serious limitation of activities",
      "definition" : "Marked pain, serious limitation of activities (10)"
    },
    {
      "code" : "0",
      "display" : "Totally disabled, crippled, pain in bed, bedridden",
      "definition" : "Totally disabled, crippled, pain in bed, bedridden (0)"
    }
  ]
}

```
