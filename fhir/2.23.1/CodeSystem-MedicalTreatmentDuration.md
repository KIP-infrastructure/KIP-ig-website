# Medical treatment duration - KIP Infrastructure v2.23.1

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Medical treatment duration**

## CodeSystem: Medical treatment duration 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/CodeSystem/MedicalTreatmentDuration | *Version*:2.23.1 |
| Active as of 2022-07-06 | *Computable Name*:MedicalTreatmentDuration |

 
Medical treatment duration 

 This Code system is referenced in the content logical definition of the following value sets: 

* [MedicinVarighedDSR](ValueSet-MedicinVarighedDSR.md)



## Resource Content

```json
{
  "resourceType" : "CodeSystem",
  "id" : "MedicalTreatmentDuration",
  "url" : "https://kip.rkkp.dk/fhir/CodeSystem/MedicalTreatmentDuration",
  "version" : "2.23.1",
  "name" : "MedicalTreatmentDuration",
  "title" : "Medical treatment duration",
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
  "description" : "Medical treatment duration",
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
    "code" : "preoperative_peroperative",
    "display" : "Præ-/peroperativt",
    "definition" : "Præ-/peroperativt"
  },
  {
    "code" : "postoperative_1_day",
    "display" : "Postoperativ, 1 døgn",
    "definition" : "Postoperativ, 1 døgn"
  },
  {
    "code" : "postoperative_multiple_days",
    "display" : "Postoperativ, flere døgn",
    "definition" : "Postoperativ, flere døgn"
  }]
}

```
