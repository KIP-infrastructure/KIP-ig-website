# Residual Tumor Grading - KIP Infrastructure v2.23.1

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Residual Tumor Grading**

## CodeSystem: Residual Tumor Grading 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/CodeSystem/ResidualTumorGrading | *Version*:2.23.1 |
| Active as of 2022-06-07 | *Computable Name*:ResidualTumorGrading |

 
Gradering hvis der er registreret resttumor i histologisk klassifikation 

 This Code system is referenced in the content logical definition of the following value sets: 

* [ResttumorGradering](ValueSet-ResttumorGradering.md)



## Resource Content

```json
{
  "resourceType" : "CodeSystem",
  "id" : "ResidualTumorGrading",
  "url" : "https://kip.rkkp.dk/fhir/CodeSystem/ResidualTumorGrading",
  "version" : "2.23.1",
  "name" : "ResidualTumorGrading",
  "title" : "Residual Tumor Grading",
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
  "description" : "Gradering hvis der er registreret resttumor i histologisk klassifikation",
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
    "code" : "gradei",
    "display" : "Grad I",
    "definition" : "Grad I - Veldifferentieret"
  },
  {
    "code" : "gradeii",
    "display" : "Grad II",
    "definition" : "Grad II - Moderat differentieret"
  },
  {
    "code" : "gradeiii",
    "display" : "Grad III",
    "definition" : "Grad III - Lavt differentieret"
  },
  {
    "code" : "gradex",
    "display" : "Grad X",
    "definition" : "Grad X - Gradering ikke mulig"
  }]
}

```
