# Harris Hip Score (HHS) - Support - KIP Infrastructure v2.23.1

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Harris Hip Score (HHS) - Support**

## CodeSystem: Harris Hip Score (HHS) - Support 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/CodeSystem/HarrisHipScoreSupport | *Version*:2.23.1 |
| Active as of 2022-07-06 | *Computable Name*:HarrisHipScoreSupport |

 
Harris Hip Score (HHS) - Support. Link: https://www.orthopaedicscore.com/scorepages/harris_hip_score.html 

 This Code system is referenced in the content logical definition of the following value sets: 

* [HarrisHipScoreHjaelpemidler](ValueSet-HarrisHipScoreHjaelpemidler.md)



## Resource Content

```json
{
  "resourceType" : "CodeSystem",
  "id" : "HarrisHipScoreSupport",
  "url" : "https://kip.rkkp.dk/fhir/CodeSystem/HarrisHipScoreSupport",
  "version" : "2.23.1",
  "name" : "HarrisHipScoreSupport",
  "title" : "Harris Hip Score (HHS) - Support",
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
  "description" : "Harris Hip Score (HHS) - Support. Link: https://www.orthopaedicscore.com/scorepages/harris_hip_score.html",
  "caseSensitive" : false,
  "content" : "complete",
  "count" : 6,
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
    "code" : "11",
    "display" : "None",
    "definition" : "None (11)"
  },
  {
    "code" : "7",
    "display" : "Cane/Walking stick for long walks",
    "definition" : "Cane/Walking stick for long walks (7)"
  },
  {
    "code" : "5",
    "display" : "Cane/Walking stick most of the time",
    "definition" : "Cane/Walking stick most of the time (5)"
  },
  {
    "code" : "3",
    "display" : "One crutch",
    "definition" : "One crutch (3)"
  },
  {
    "code" : "2",
    "display" : "Two Canes/Walking sticks",
    "definition" : "Two Canes/Walking sticks (2)"
  },
  {
    "code" : "0",
    "display" : "Two crutches, walker or not able to walk",
    "definition" : "Two crutches, walker or not able to walk (0)"
  }]
}

```
