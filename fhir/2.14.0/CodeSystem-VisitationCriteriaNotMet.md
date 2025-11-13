# Visitation criteria not met; cause - KIP Infrastructure v2.14.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Visitation criteria not met; cause**

## CodeSystem: Visitation criteria not met; cause 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/CodeSystem/VisitationCriteriaNotMet | *Version*:2.14.0 |
| Active as of 2022-08-23 | *Computable Name*:VisitationCriteriaNotMet |

 
Visitation criteria not met; cause 

 This Code system is referenced in the content logical definition of the following value sets: 

* [ManglendeVisitation](ValueSet-ManglendeVisitation.md)



## Resource Content

```json
{
  "resourceType" : "CodeSystem",
  "id" : "VisitationCriteriaNotMet",
  "url" : "https://kip.rkkp.dk/fhir/CodeSystem/VisitationCriteriaNotMet",
  "version" : "2.14.0",
  "name" : "VisitationCriteriaNotMet",
  "title" : "Visitation criteria not met; cause",
  "status" : "active",
  "date" : "2022-08-23T00:00:00+02:00",
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
  "description" : "Visitation criteria not met; cause",
  "caseSensitive" : false,
  "content" : "complete",
  "count" : 4,
  "concept" : [
    {
      "code" : "not_terminally_ill",
      "display" : "Not terminally ill",
      "definition" : "Not terminally ill / Ikke uhelbredeligt syg"
    },
    {
      "code" : "no_symptomatology",
      "display" : "No symptomatology",
      "definition" : "No symptomatology / Ikke symptomatologi, som kræver en specialiseret/tværfaglig indsats"
    },
    {
      "code" : "not_diagnostically_completed",
      "display" : "Not diagnostically completed",
      "definition" : "Not diagnostically completed / Ikke diagnostisk færdigudredt"
    },
    {
      "code" : "not_informed",
      "display" : "Patient not well informed",
      "definition" : "Patient not well informed / Patienten ikke velinformeret om sin sygdom"
    }
  ]
}

```
