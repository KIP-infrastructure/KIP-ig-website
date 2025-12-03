# Intubation - KIP Infrastructure v2.15.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Intubation**

## CodeSystem: Intubation 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/CodeSystem/Intubation | *Version*:2.15.0 |
| Active as of 2022-06-09 | *Computable Name*:Intubation |

 
Resultat af luftvejshåndtering vha. intubation 

 This Code system is referenced in the content logical definition of the following value sets: 

* [Intubation](ValueSet-Intubation.md)



## Resource Content

```json
{
  "resourceType" : "CodeSystem",
  "id" : "Intubation",
  "url" : "https://kip.rkkp.dk/fhir/CodeSystem/Intubation",
  "version" : "2.15.0",
  "name" : "Intubation",
  "title" : "Intubation",
  "status" : "active",
  "date" : "2022-06-09T00:00:00+02:00",
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
  "description" : "Resultat af luftvejshåndtering vha. intubation",
  "content" : "complete",
  "count" : 6,
  "concept" : [
    {
      "code" : "max2_dir",
      "display" : "Max 2 attempts, final by direct laryngoscopy",
      "definition" : "Højest 2 forsøg, seneste ved direkte laryngoskopi"
    },
    {
      "code" : "max2_video",
      "display" : "Max 2 attempts, final by videolaryngoscopy",
      "definition" : "Højest 2 forsøg, seneste ved videolaryngoskopi"
    },
    {
      "code" : "max2_flex",
      "display" : "Max 2 attempts, final by flexible laryngoscopy",
      "definition" : "Højest 2 forsøg, seneste ved fleksibel skopi"
    },
    {
      "code" : "max2_other",
      "display" : "Max 2 attempts, final by different method than above mentioned",
      "definition" : "Højest 2 forsøg seneste ved andet end ovennævnte metoder"
    },
    {
      "code" : "3_or_more",
      "display" : "3 or more attempts method regardless",
      "definition" : "3 forsøg eller flere uanset metode"
    },
    {
      "code" : "abandon",
      "display" : "Intubation abandonned",
      "definition" : "Intubation opgivet"
    }
  ]
}

```
