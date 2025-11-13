# Score ved central blokade - KIP Infrastructure v2.14.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Score ved central blokade**

## CodeSystem: Score ved central blokade 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/CodeSystem/ScoreCentralBlock | *Version*:2.14.0 |
| Active as of 2022-06-09 | *Computable Name*:ScoreCentralBlock |

 
Regional score ved anlæg af central nerveblokade 

 This Code system is referenced in the content logical definition of the following value sets: 

* [ScoreCentralBlock](ValueSet-ScoreCentralBlock.md)



## Resource Content

```json
{
  "resourceType" : "CodeSystem",
  "id" : "ScoreCentralBlock",
  "url" : "https://kip.rkkp.dk/fhir/CodeSystem/ScoreCentralBlock",
  "version" : "2.14.0",
  "name" : "ScoreCentralBlock",
  "title" : "Score ved central blokade",
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
  "description" : "Regional score ved anlæg af central nerveblokade",
  "content" : "complete",
  "count" : 4,
  "concept" : [
    {
      "code" : "attempt_LE3",
      "display" : "Apply attemted <=3",
      "definition" : "Forsøgt anlagt antal <=3 gange"
    },
    {
      "code" : "attempt_GT3",
      "display" : "Apply attempted >3",
      "definition" : "Forsøgt anlagt >3 gange"
    },
    {
      "code" : "epidural_on_arr",
      "display" : "Epidural catheter applied on arrival",
      "definition" : "Ankommet med anlagt epidural kateter"
    },
    {
      "code" : "abandon",
      "display" : "Abandonned",
      "definition" : "Opgivet"
    }
  ]
}

```
