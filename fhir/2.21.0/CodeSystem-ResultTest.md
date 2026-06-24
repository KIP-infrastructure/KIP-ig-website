# Result of test - KIP Infrastructure v2.21.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Result of test**

## CodeSystem: Result of test 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/CodeSystem/ResultTest | *Version*:2.21.0 |
| Active as of 2022-06-07 | *Computable Name*:ResultTest |

 
Result of test (for FISH, etc.) 

 This Code system is referenced in the content logical definition of the following value sets: 

* [FISHResult202502](ValueSet-FISHResult202502.md)
* [ResultTestFISH](ValueSet-ResultTestFISH.md)



## Resource Content

```json
{
  "resourceType" : "CodeSystem",
  "id" : "ResultTest",
  "url" : "https://kip.rkkp.dk/fhir/CodeSystem/ResultTest",
  "version" : "2.21.0",
  "name" : "ResultTest",
  "title" : "Result of test",
  "status" : "active",
  "date" : "2022-06-07T00:00:00+02:00",
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
  "description" : "Result of test (for FISH, etc.)",
  "caseSensitive" : false,
  "content" : "complete",
  "count" : 2,
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
    "code" : "normal",
    "display" : "Normal",
    "definition" : "Normal / Normal [FISH]"
  },
  {
    "code" : "changes",
    "display" : "Changes",
    "definition" : "Changes / Forandringer [FISH]"
  }]
}

```
