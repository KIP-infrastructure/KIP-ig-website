# Profylaksebehandling - KIP Infrastructure v2.14.2

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Profylaksebehandling**

## CodeSystem: Profylaksebehandling 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/CodeSystem/Profylaksebehandling | *Version*:2.14.2 |
| Active as of 2024-06-24 | *Computable Name*:Profylaksebehandling |

 
Profylaksebehandling 

 This Code system is referenced in the content logical definition of the following value sets: 

* [InitialRespons](ValueSet-InitialRespons.md)
* [VarigRespons](ValueSet-VarigRespons.md)



## Resource Content

```json
{
  "resourceType" : "CodeSystem",
  "id" : "Profylaksebehandling",
  "url" : "https://kip.rkkp.dk/fhir/CodeSystem/Profylaksebehandling",
  "version" : "2.14.2",
  "name" : "Profylaksebehandling",
  "title" : "Profylaksebehandling",
  "status" : "active",
  "date" : "2024-06-24T00:00:00+02:00",
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
  "description" : "Profylaksebehandling",
  "caseSensitive" : false,
  "content" : "complete",
  "count" : 4,
  "concept" : [
    {
      "code" : "yesfreeOfTreatment",
      "display" : "Ja, og patienten genoptog ikke sin vanlige profylaksebehandling"
    },
    {
      "code" : "yesagainprofylakse",
      "display" : "Ja, men patienten har genoptaget profylaksebehandling"
    },
    {
      "code" : "nofreeOfTreatment",
      "display" : "Nej, og patienten har været behandlingsfri indtil nu"
    },
    {
      "code" : "noagainprofylakse",
      "display" : "Nej, men patienten er genoptaget profylakse"
    }
  ]
}

```
