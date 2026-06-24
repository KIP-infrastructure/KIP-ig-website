# Perioder - KIP Infrastructure v2.21.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Perioder**

## CodeSystem: Perioder 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/CodeSystem/Periods | *Version*:2.21.0 |
| Active as of 2022-11-21 | *Computable Name*:Periods |

 
Kalendermæssige perioder 

 This Code system is referenced in the content logical definition of the following value sets: 

* [PerioderMK](ValueSet-PerioderMK.md)



## Resource Content

```json
{
  "resourceType" : "CodeSystem",
  "id" : "Periods",
  "url" : "https://kip.rkkp.dk/fhir/CodeSystem/Periods",
  "version" : "2.21.0",
  "name" : "Periods",
  "title" : "Perioder",
  "status" : "active",
  "date" : "2022-11-21T00:00:00+02:00",
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
  "description" : "Kalendermæssige perioder",
  "content" : "complete",
  "count" : 5,
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
    "code" : "day",
    "display" : "Day",
    "definition" : "Dag"
  },
  {
    "code" : "week",
    "display" : "Week",
    "definition" : "Uge"
  },
  {
    "code" : "month",
    "display" : "Month",
    "definition" : "Måned"
  },
  {
    "code" : "quarter",
    "display" : "Quarter",
    "definition" : "Kvartal"
  },
  {
    "code" : "year",
    "display" : "Year",
    "definition" : "År"
  }]
}

```
