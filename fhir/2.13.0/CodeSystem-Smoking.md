# Smoking - KIP Infrastructure v2.13.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Smoking**

## CodeSystem: Smoking 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/CodeSystem/Smoking | *Version*:2.13.0 |
| Active as of 2022-05-31 | *Computable Name*:Smoking |

 
Healthfactor smoking 

 This Code system is referenced in the content logical definition of the following value sets: 

* [RisikofaktorerDMPN](ValueSet-RisikofaktorerDMPN.md)
* [Ryger8uger](ValueSet-Ryger8uger.md)
* [Rygning](ValueSet-Rygning.md)
* [RygningDCCG](ValueSet-RygningDCCG.md)



## Resource Content

```json
{
  "resourceType" : "CodeSystem",
  "id" : "Smoking",
  "url" : "https://kip.rkkp.dk/fhir/CodeSystem/Smoking",
  "version" : "2.13.0",
  "name" : "Smoking",
  "title" : "Smoking",
  "status" : "active",
  "date" : "2022-05-31T00:00:00+02:00",
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
  "description" : "Healthfactor smoking",
  "content" : "complete",
  "count" : 5,
  "concept" : [
    {
      "code" : "smoker",
      "display" : "Ryger",
      "definition" : "Ryger"
    },
    {
      "code" : "passivesmoker",
      "display" : "Passiv ryger",
      "definition" : "Passiv ryger"
    },
    {
      "code" : "non-smoker",
      "display" : "Ikkeryger",
      "definition" : "Ikkeryger"
    },
    {
      "code" : "never-smoker",
      "display" : "Aldrig ryger",
      "definition" : "Aldrig ryger"
    },
    {
      "code" : "formersmoker",
      "display" : "Tidligere ryger",
      "definition" : "Tidligere ryger"
    }
  ]
}

```
