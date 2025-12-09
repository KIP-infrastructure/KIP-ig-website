# Result of test - KIP Infrastructure v2.17.1

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Result of test**

## CodeSystem: Result of test 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/CodeSystem/ResultTest | *Version*:2.17.1 |
| Active as of 2022-06-07 | *Computable Name*:ResultTest |

 
Result of test (for FISH, etc.) 

 This Code system is referenced in the content logical definition of the following value sets: 

* [FISHResult202502](ValueSet-FISHResult202502.md)
* [ResultTestFISH](ValueSet-ResultTestFISH.md)



## Resource Content

```json
{
  "resourceType" : "CodeSystem",
  "id" : "ResultTest",
  "url" : "https://kip.rkkp.dk/fhir/CodeSystem/ResultTest",
  "version" : "2.17.1",
  "name" : "ResultTest",
  "title" : "Result of test",
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
  "description" : "Result of test (for FISH, etc.)",
  "caseSensitive" : false,
  "content" : "complete",
  "count" : 2,
  "concept" : [
    {
      "code" : "normal",
      "display" : "Normal",
      "definition" : "Normal / Normal [FISH]"
    },
    {
      "code" : "changes",
      "display" : "Changes",
      "definition" : "Changes / Forandringer [FISH]"
    }
  ]
}

```
