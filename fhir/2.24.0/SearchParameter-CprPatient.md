# CprPatient - KIP Infrastructure v2.24.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **CprPatient**

## SearchParameter: CprPatient 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/SearchParameter/CprPatient | *Version*:2.24.0 |
| Active as of 2026-08-05 | *Computable Name*:CprPatient |

 
Search by CPR in Patient 



## Resource Content

```json
{
  "resourceType" : "SearchParameter",
  "id" : "CprPatient",
  "url" : "https://kip.rkkp.dk/fhir/SearchParameter/CprPatient",
  "version" : "2.24.0",
  "name" : "CprPatient",
  "status" : "active",
  "date" : "2026-08-05T12:29:31+00:00",
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
