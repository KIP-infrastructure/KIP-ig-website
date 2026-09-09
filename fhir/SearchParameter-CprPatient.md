# CprPatient - KIP Infrastructure v1.25.1

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **CprPatient**

## SearchParameter: CprPatient 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/SearchParameter/CprPatient | *Version*:1.25.1 |
| Active as of 2026-09-09 | *Computable Name*:CprPatient |

 
Search by CPR in Patient 



## Resource Content

```json
{
  "resourceType" : "SearchParameter",
  "id" : "CprPatient",
  "url" : "https://kip.rkkp.dk/fhir/SearchParameter/CprPatient",
  "version" : "1.25.1",
  "name" : "CprPatient",
  "status" : "active",
  "date" : "2026-09-09T09:26:10+00:00",
  "publisher" : "Sundhedsvæsenets Kvalitetsinstitut with Trifork Digital Health A/S",
  "contact" : [{
    "name" : "Sundhedsvæsenets Kvalitetsinstitut with Trifork Digital Health A/S",
    "telecom" : [{
      "system" : "url",
      "value" : "https://trifork.com"
    },
    {
      "system" : "email",
      "value" : "rbk@trifork.com"
    }]
  }],
  "description" : "Search by CPR in Patient",
  "code" : "cpr",
  "base" : ["Patient"],
  "type" : "token",
  "expression" : "Patient.identifier.where(system='urn:oid:1.2.208.176.1.2')",
  "comparator" : ["eq"]
}

```
