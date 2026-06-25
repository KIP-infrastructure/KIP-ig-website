# Harris Hip Score (HHS) - Sitting - KIP Infrastructure v2.23.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Harris Hip Score (HHS) - Sitting**

## CodeSystem: Harris Hip Score (HHS) - Sitting 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/CodeSystem/HarrisHipScoreSitting | *Version*:2.23.0 |
| Active as of 2022-07-06 | *Computable Name*:HarrisHipScoreSitting |

 
Harris Hip Score (HHS) - Sitting. Link: https://www.orthopaedicscore.com/scorepages/harris_hip_score.html 

 This Code system is referenced in the content logical definition of the following value sets: 

* [HarrisHipScoreSiddefunktion](ValueSet-HarrisHipScoreSiddefunktion.md)



## Resource Content

```json
{
  "resourceType" : "CodeSystem",
  "id" : "HarrisHipScoreSitting",
  "url" : "https://kip.rkkp.dk/fhir/CodeSystem/HarrisHipScoreSitting",
  "version" : "2.23.0",
  "name" : "HarrisHipScoreSitting",
  "title" : "Harris Hip Score (HHS) - Sitting",
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
  "description" : "Harris Hip Score (HHS) - Sitting. Link: https://www.orthopaedicscore.com/scorepages/harris_hip_score.html",
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
    "code" : "5",
    "display" : "Comfortably, ordinary chair for one hour",
    "definition" : "Comfortably, ordinary chair for one hour (5)"
  },
  {
    "code" : "3",
    "display" : "On a high chair for 30 minutes",
    "definition" : "On a high chair for 30 minutes (3)"
  },
  {
    "code" : "0",
    "display" : "Unable to sit comfortably on any chair",
    "definition" : "Unable to sit comfortably on any chair (0)"
  }]
}

```
