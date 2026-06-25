# Harris Hip Score (HHS) - Activities - shoes, socks - KIP Infrastructure v2.23.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Harris Hip Score (HHS) - Activities - shoes, socks**

## CodeSystem: Harris Hip Score (HHS) - Activities - shoes, socks 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/CodeSystem/HarrisHipScoreShoesSocks | *Version*:2.23.0 |
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
  "version" : "2.23.0",
  "name" : "HarrisHipScoreShoesSocks",
  "title" : "Harris Hip Score (HHS) - Activities - shoes, socks",
  "status" : "active",
  "date" : "2022-07-06T00:00:00+02:00",
  "publisher" : "Sundhedsvæsenets Kvalitetsinstitut with Trifork Digital Health A/S",
  "contact" : [{
    "name" : "Sundhedsvæsenets Kvalitetsinstitut with Trifork Digital Health A/S",
    "telecom" : [{
      "system" : "url",
      "value" : "https://trifork.com"
    },
    {
      "system" : "email",
      "value" : "rbk@trifork.com"
    }]
  }],
  "description" : "Harris Hip Score (HHS) - Activities - shoes socks. Link: https://www.orthopaedicscore.com/scorepages/harris_hip_score.html",
  "caseSensitive" : false,
  "content" : "complete",
  "count" : 3,
  "property" : [{
    "code" : "comment",
    "uri" : "http://hl7.org/fhir/concept-properties#comment",
    "description" : "A string that provides additional detail pertinent to the use or understanding of the concept",
    "type" : "string"
  },
  {
    "code" : "effectiveDate",
    "uri" : "http://hl7.org/fhir/concept-properties#effectiveDate",
    "description" : "The date at which the concept status was last changed",
    "type" : "dateTime"
  },
  {
    "code" : "status",
    "uri" : "http://hl7.org/fhir/concept-properties#status",
    "description" : "A code that indicates the status of the concept. Typical values are active, experimental, deprecated, and retired",
    "type" : "code"
  },
  {
    "code" : "inactive",
    "uri" : "http://hl7.org/fhir/concept-properties#inactive",
    "description" : "True if the concept is not considered active - e.g. not a valid concept any more. Property type is boolean, default value is false. Note that the status property may also be used to indicate that a concept is inactive",
    "type" : "boolean"
  }],
  "concept" : [{
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
  }]
}

```
