# Revision; type - KIP Infrastructure v2.23.1

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Revision; type**

## CodeSystem: Revision; type 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/CodeSystem/RevisionType | *Version*:2.23.1 |
| Active as of 2022-10-07 | *Computable Name*:RevisionType |

 
Revision; type 

 This Code system is referenced in the content logical definition of the following value sets: 

* [RevisionstypeDSR](ValueSet-RevisionstypeDSR.md)



## Resource Content

```json
{
  "resourceType" : "CodeSystem",
  "id" : "RevisionType",
  "url" : "https://kip.rkkp.dk/fhir/CodeSystem/RevisionType",
  "version" : "2.23.1",
  "name" : "RevisionType",
  "title" : "Revision; type",
  "status" : "active",
  "date" : "2022-10-07T00:00:00+02:00",
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
  "description" : "Revision; type",
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
    "code" : "one-stage",
    "display" : "One-stage",
    "definition" : "One-stage"
  },
  {
    "code" : "two-stage_step_1",
    "display" : "Two-stage - Step 1",
    "definition" : "Two-stage - Step 1"
  },
  {
    "code" : "two-stage_step_2",
    "display" : "Two-stage - Step 2",
    "definition" : "Two-stage - Step 2"
  }]
}

```
