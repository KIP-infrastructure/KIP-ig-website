# Residual Tumor Grading - KIP Infrastructure v2.14.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Residual Tumor Grading**

## CodeSystem: Residual Tumor Grading 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/CodeSystem/ResidualTumorGrading | *Version*:2.14.0 |
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
  "version" : "2.14.0",
  "name" : "ResidualTumorGrading",
  "title" : "Residual Tumor Grading",
  "status" : "active",
  "date" : "2022-06-07T00:00:00+02:00",
  "publisher" : "Sundhedsvæsenets Kvalitetsinstitut with Trifork Digital Health A/S",
  "contact" : [
    {
      "name" : "Sundhedsvæsenets Kvalitetsinstitut with Trifork Digital Health A/S",
      "telecom" : [
        {
          "system" : "url",
          "value" : "https://trifork.com"
        },
        {
          "system" : "email",
          "value" : "rbk@trifork.com"
        }
      ]
    }
  ],
  "description" : "Gradering hvis der er registreret resttumor i histologisk klassifikation",
  "content" : "complete",
  "count" : 4,
  "concept" : [
    {
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
    }
  ]
}

```
