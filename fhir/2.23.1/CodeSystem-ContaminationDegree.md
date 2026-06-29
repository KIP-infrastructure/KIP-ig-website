# Contamination degree - KIP Infrastructure v2.23.1

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Contamination degree**

## CodeSystem: Contamination degree 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/CodeSystem/ContaminationDegree | *Version*:2.23.1 |
| Active as of 2022-06-28 | *Computable Name*:ContaminationDegree |

 
Contamination degree 

 This Code system is referenced in the content logical definition of the following value sets: 

* [Kontamineringsgrad](ValueSet-Kontamineringsgrad.md)



## Resource Content

```json
{
  "resourceType" : "CodeSystem",
  "id" : "ContaminationDegree",
  "url" : "https://kip.rkkp.dk/fhir/CodeSystem/ContaminationDegree",
  "version" : "2.23.1",
  "name" : "ContaminationDegree",
  "title" : "Contamination degree",
  "status" : "active",
  "date" : "2022-06-28T00:00:00+02:00",
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
  "description" : "Contamination degree",
  "caseSensitive" : false,
  "content" : "complete",
  "count" : 4,
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
    "code" : "clean",
    "display" : "Clean",
    "definition" : "Clean / Ren"
  },
  {
    "code" : "potentially_contaminated",
    "display" : "Potentially contaminated",
    "definition" : "Potentially contaminated / Potentielt kontamineret"
  },
  {
    "code" : "contaminated",
    "display" : "Contaminated",
    "definition" : "Contaminated / Kontamineret"
  },
  {
    "code" : "dirty",
    "display" : "Dirty",
    "definition" : "Dirty / Snavset"
  }]
}

```
