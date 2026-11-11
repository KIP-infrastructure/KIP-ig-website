# Hvorfor er patienten ikke involveret - KIP Infrastructure v2.27.3

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Hvorfor er patienten ikke involveret**

## ValueSet: Hvorfor er patienten ikke involveret 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/ValueSet/ClinicalProtocolNotParticipated | *Version*:2.27.3 |
| Active as of 2022-06-07 | *Computable Name*:ClinicalProtocolNotParticipated |

 
Hvorfor er patienten ikke involveret 

 **References** 

This value set is not used here; it may be used elsewhere (e.g. specifications and/or implementations that use this content)

### Logical Definition (CLD)

 

### Expansion

-------

 [Description of the above table(s)](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#terminology). 



## Resource Content

```json
{
  "resourceType" : "ValueSet",
  "id" : "ClinicalProtocolNotParticipated",
  "url" : "https://kip.rkkp.dk/fhir/ValueSet/ClinicalProtocolNotParticipated",
  "version" : "2.27.3",
  "name" : "ClinicalProtocolNotParticipated",
  "title" : "Hvorfor er patienten ikke involveret",
  "status" : "active",
  "date" : "2022-06-07T00:00:00+02:00",
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
  "description" : "Hvorfor er patienten ikke involveret",
  "compose" : {
    "include" : [{
      "system" : "https://kip.rkkp.dk/fhir/CodeSystem/ClinicalProtocolNotParticipated",
      "concept" : [{
        "code" : "rejected",
        "display" : "Tilbudt klinisk forsøg, men deltagelse afvist af patient"
      },
      {
        "code" : "deselected",
        "display" : "Patienten var kandidat til et klinisk forsøg, men deltagelse fravalgt af afdelingen"
      },
      {
        "code" : "no_invitation",
        "display" : "Afdelingen har ikke et tilbud om deltagelse i klinisk forsøg"
      }]
    }]
  }
}

```
