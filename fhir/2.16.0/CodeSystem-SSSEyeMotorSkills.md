# Scandinavian Stroke Scale (SSS) - Eye motor skills - KIP Infrastructure v2.16.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Scandinavian Stroke Scale (SSS) - Eye motor skills**

## CodeSystem: Scandinavian Stroke Scale (SSS) - Eye motor skills 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/CodeSystem/SSSEyeMotorSkills | *Version*:2.16.0 |
| Active as of 2022-06-23 | *Computable Name*:SSSEyeMotorSkills |

 
Scandinavian Stroke Scale (SSS) - Eye motor skills: Øjendeviation er ligeledes et dårligt prognostisk tegn. 

 This Code system is referenced in the content logical definition of the following value sets: 

* [SSSOejenmotorik](ValueSet-SSSOejenmotorik.md)



## Resource Content

```json
{
  "resourceType" : "CodeSystem",
  "id" : "SSSEyeMotorSkills",
  "url" : "https://kip.rkkp.dk/fhir/CodeSystem/SSSEyeMotorSkills",
  "version" : "2.16.0",
  "name" : "SSSEyeMotorSkills",
  "title" : "Scandinavian Stroke Scale (SSS) - Eye motor skills",
  "status" : "active",
  "date" : "2022-06-23T00:00:00+02:00",
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
  "description" : "Scandinavian Stroke Scale (SSS) - Eye motor skills: Øjendeviation er ligeledes et dårligt prognostisk tegn.",
  "content" : "complete",
  "count" : 3,
  "concept" : [
    {
      "code" : "4",
      "display" : "4",
      "definition" : "Parallelle, frie øjenbevægelser. Der må godt foreligge isolerede øjenmuskelpareser på den ene side."
    },
    {
      "code" : "2",
      "display" : "2",
      "definition" : "Konjugeret blikparese: Pt. kan ikke dreje øjnene samtidigt til den ene side."
    },
    {
      "code" : "0",
      "display" : "0",
      "definition" : "Blikdeviation: Pt.s øjne er tvangsmæssigt drejet til den ene side."
    }
  ]
}

```
