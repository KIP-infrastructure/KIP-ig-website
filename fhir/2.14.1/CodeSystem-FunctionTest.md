# Function test - KIP Infrastructure v2.14.1

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Function test**

## CodeSystem: Function test 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/CodeSystem/FunctionTest | *Version*:2.14.1 |
| Active as of 2022-07-19 | *Computable Name*:FunctionTest |

 
Function test 

 This Code system is referenced in the content logical definition of the following value sets: 

* [FunktionTestADLDANDEM](ValueSet-FunktionTestADLDANDEM.md)



## Resource Content

```json
{
  "resourceType" : "CodeSystem",
  "id" : "FunctionTest",
  "url" : "https://kip.rkkp.dk/fhir/CodeSystem/FunctionTest",
  "version" : "2.14.1",
  "name" : "FunctionTest",
  "title" : "Function test",
  "status" : "active",
  "date" : "2022-07-19T00:00:00+02:00",
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
  "description" : "Function test",
  "caseSensitive" : false,
  "content" : "complete",
  "count" : 3,
  "concept" : [
    {
      "code" : "faq_iadl",
      "display" : "FAQ (IADL)",
      "definition" : "FAQ (IADL)"
    },
    {
      "code" : "dad",
      "display" : "DAD",
      "definition" : "DAD"
    },
    {
      "code" : "adcs_adl",
      "display" : "ADCS-ADL",
      "definition" : "ADCS-ADL"
    }
  ]
}

```
