# Scandinavian Stroke Scale (SSS) - Facial paresis - KIP Infrastructure v2.15.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Scandinavian Stroke Scale (SSS) - Facial paresis**

## CodeSystem: Scandinavian Stroke Scale (SSS) - Facial paresis 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/CodeSystem/SSSFacialParesis | *Version*:2.15.0 |
| Active as of 2022-06-23 | *Computable Name*:SSSFacialParesis |

 
Scandinavian Stroke Scale (SSS) - Facial paresis: Kun en sikker facialisparese giver 0. Hvis man er i tvivl gives 2. 

 This Code system is referenced in the content logical definition of the following value sets: 

* [SSSFacialisparese](ValueSet-SSSFacialisparese.md)



## Resource Content

```json
{
  "resourceType" : "CodeSystem",
  "id" : "SSSFacialParesis",
  "url" : "https://kip.rkkp.dk/fhir/CodeSystem/SSSFacialParesis",
  "version" : "2.15.0",
  "name" : "SSSFacialParesis",
  "title" : "Scandinavian Stroke Scale (SSS) - Facial paresis",
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
  "description" : "Scandinavian Stroke Scale (SSS) - Facial paresis: Kun en sikker facialisparese giver 0. Hvis man er i tvivl gives 2.",
  "content" : "complete",
  "count" : 2,
  "concept" : [
    {
      "code" : "2",
      "display" : "2",
      "definition" : "Ingen eller tvivlsom parese."
    },
    {
      "code" : "0",
      "display" : "0",
      "definition" : "Sikker facialisparese"
    }
  ]
}

```
