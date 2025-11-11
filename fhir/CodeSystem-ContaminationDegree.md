# Contamination degree - KIP Infrastructure v2.13.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Contamination degree**

## CodeSystem: Contamination degree 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/CodeSystem/ContaminationDegree | *Version*:2.13.0 |
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
  "version" : "2.13.0",
  "name" : "ContaminationDegree",
  "title" : "Contamination degree",
  "status" : "active",
  "date" : "2022-06-28T00:00:00+02:00",
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
  "description" : "Contamination degree",
  "caseSensitive" : false,
  "content" : "complete",
  "count" : 4,
  "concept" : [
    {
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
    }
  ]
}

```
