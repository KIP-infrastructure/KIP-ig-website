# Harris Hip Score (HHS) - Activities - shoes, socks - KIP Infrastructure v2.17.1

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Harris Hip Score (HHS) - Activities - shoes, socks**

## CodeSystem: Harris Hip Score (HHS) - Activities - shoes, socks 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/CodeSystem/HarrisHipScoreShoesSocks | *Version*:2.17.1 |
| Active as of 2022-07-06 | *Computable Name*:HarrisHipScoreShoesSocks |

 
Harris Hip Score (HHS) - Activities - shoes socks. Link: https://www.orthopaedicscore.com/scorepages/harris_hip_score.html 

 This Code system is referenced in the content logical definition of the following value sets: 

* [HarrisHipScoreSkoStroemper](ValueSet-HarrisHipScoreSkoStroemper.md)



## Resource Content

```json
{
  "resourceType" : "CodeSystem",
  "id" : "HarrisHipScoreShoesSocks",
  "url" : "https://kip.rkkp.dk/fhir/CodeSystem/HarrisHipScoreShoesSocks",
  "version" : "2.17.1",
  "name" : "HarrisHipScoreShoesSocks",
  "title" : "Harris Hip Score (HHS) - Activities - shoes, socks",
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
  "description" : "Harris Hip Score (HHS) - Activities - shoes socks. Link: https://www.orthopaedicscore.com/scorepages/harris_hip_score.html",
  "caseSensitive" : false,
  "content" : "complete",
  "count" : 3,
  "concept" : [
    {
      "code" : "4",
      "display" : "With ease",
      "definition" : "With ease (4)"
    },
    {
      "code" : "2",
      "display" : "With difficulty",
      "definition" : "With difficulty (2)"
    },
    {
      "code" : "0",
      "display" : "Unable to fit or tie",
      "definition" : "Unable to fit or tie (0)"
    }
  ]
}

```
