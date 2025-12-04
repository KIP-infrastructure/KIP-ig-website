# Clinical protocol - patient did not participated; cause - KIP Infrastructure v2.16.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Clinical protocol - patient did not participated; cause**

## CodeSystem: Clinical protocol - patient did not participated; cause 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/CodeSystem/ClinicalProtocolNotParticipated | *Version*:2.16.0 |
| Active as of 2022-07-11 | *Computable Name*:ClinicalProtocolNotParticipated |

 
Clinical protocol - patient did not participated; cause 

 This Code system is referenced in the content logical definition of the following value sets: 

* [ClinicalProtocolNotParticipated](ValueSet-ClinicalProtocolNotParticipated.md)



## Resource Content

```json
{
  "resourceType" : "CodeSystem",
  "id" : "ClinicalProtocolNotParticipated",
  "url" : "https://kip.rkkp.dk/fhir/CodeSystem/ClinicalProtocolNotParticipated",
  "version" : "2.16.0",
  "name" : "ClinicalProtocolNotParticipated",
  "title" : "Clinical protocol - patient did not participated; cause",
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
  "description" : "Clinical protocol -  patient did not participated; cause",
  "caseSensitive" : false,
  "content" : "complete",
  "count" : 3,
  "concept" : [
    {
      "code" : "rejected",
      "display" : "Patient rejected invitation",
      "definition" : "Patient rejected invitation"
    },
    {
      "code" : "deselected",
      "display" : "Health department deselected patient",
      "definition" : "Health department deselected patient"
    },
    {
      "code" : "no_invitation",
      "display" : "Patient was not invited",
      "definition" : "Patient was not invited"
    }
  ]
}

```
