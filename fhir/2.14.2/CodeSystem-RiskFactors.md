# Risk factors - KIP Infrastructure v2.14.2

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Risk factors**

## CodeSystem: Risk factors 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/CodeSystem/RiskFactors | *Version*:2.14.2 |
| Active as of 2022-07-11 | *Computable Name*:RiskFactors |

 
Risk factors 

 This Code system is referenced in the content logical definition of the following value sets: 

* [RisikofaktorerDMPN](ValueSet-RisikofaktorerDMPN.md)



## Resource Content

```json
{
  "resourceType" : "CodeSystem",
  "id" : "RiskFactors",
  "url" : "https://kip.rkkp.dk/fhir/CodeSystem/RiskFactors",
  "version" : "2.14.2",
  "name" : "RiskFactors",
  "title" : "Risk factors",
  "status" : "active",
  "date" : "2022-07-11T00:00:00+02:00",
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
  "description" : "Risk factors",
  "content" : "complete",
  "count" : 7,
  "concept" : [
    {
      "code" : "behavioural",
      "display" : "Behavioural",
      "definition" : "Behavioural"
    },
    {
      "code" : "physiological",
      "display" : "Physiological",
      "definition" : "Physiological",
      "concept" : [
        {
          "code" : "bmi",
          "display" : "Body mass index (BMI)",
          "definition" : "Body mass index (BMI)"
        },
        {
          "code" : "hypertension",
          "display" : "Hypertension",
          "definition" : "Hypertension"
        },
        {
          "code" : "hyperlipidemia",
          "display" : "Hyperlipidemia",
          "definition" : "Hyperlipidemia / Hyperlipidæmi"
        }
      ]
    },
    {
      "code" : "environmental",
      "display" : "Environmental",
      "definition" : "Environmental"
    },
    {
      "code" : "genetic",
      "display" : "Genetic",
      "definition" : "Genetic"
    }
  ]
}

```
