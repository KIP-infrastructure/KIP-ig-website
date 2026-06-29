# Treatment schedule - KIP Infrastructure v2.23.1

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Treatment schedule**

## CodeSystem: Treatment schedule 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/CodeSystem/TreatmentSchedule | *Version*:2.23.1 |
| Active as of 2022-06-03 | *Computable Name*:TreatmentSchedule |

 
Treatment schedule 

 This Code system is referenced in the content logical definition of the following value sets: 

* [TreatmentScheduledALD](ValueSet-TreatmentScheduledALD.md)



## Resource Content

```json
{
  "resourceType" : "CodeSystem",
  "id" : "TreatmentSchedule",
  "url" : "https://kip.rkkp.dk/fhir/CodeSystem/TreatmentSchedule",
  "version" : "2.23.1",
  "name" : "TreatmentSchedule",
  "title" : "Treatment schedule",
  "status" : "active",
  "date" : "2022-06-03T00:00:00+02:00",
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
  "description" : "Treatment schedule",
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
    "code" : "implemented",
    "display" : "Implemented or planned implementation",
    "definition" : "Implemented or planned implementation of treatment / Iværksat eller planlagt iværksættelse af behandling"
  },
  {
    "code" : "wait_and_watch",
    "display" : "Wait and watch (WAW) strategy",
    "definition" : "Wait and watch (WAW) strategy / Wait and watch strategi"
  },
  {
    "code" : "no_planned_treatment",
    "display" : "No planned treatment",
    "definition" : "No planned treatment / Ingen planlagt behandling er iværksat"
  }]
}

```
