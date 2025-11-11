# Mors Diagnosekode - Kardial (DNSL) - KIP Infrastructure v2.13.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Mors Diagnosekode - Kardial (DNSL)**

## ValueSet: Mors Diagnosekode - Kardial (DNSL) (Experimental) 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/ValueSet/MorsDiagnoseKardialDNSL | *Version*:2.13.0 |
| Active as of 2024-01-10 | *Computable Name*:MorsDiagnoseKardialDNSL |

 
Mors Diagnosekode - Kardiale årsager (DNSL) 

 **References** 

This value set is not used here; it may be used elsewhere (e.g. specifications and/or implementations that use this content)

### Logical Definition (CLD)

 

### Expansion

-------

 Explanation of the columns that may appear on this page: 

| | |
| :--- | :--- |
| Level | A few code lists that FHIR defines are hierarchical - each code is assigned a level. In this scheme, some codes are under other codes, and imply that the code they are under also applies |
| System | The source of the definition of the code (when the value set draws in codes defined elsewhere) |
| Code | The code (used as the code in the resource instance) |
| Display | The display (used in the*display*element of a[Coding](http://hl7.org/fhir/R4/datatypes.html#Coding)). If there is no display, implementers should not simply display the code, but map the concept into their application |
| Definition | An explanation of the meaning of the concept |
| Comments | Additional notes about how to use the code |



## Resource Content

```json
{
  "resourceType" : "ValueSet",
  "id" : "MorsDiagnoseKardialDNSL",
  "url" : "https://kip.rkkp.dk/fhir/ValueSet/MorsDiagnoseKardialDNSL",
  "version" : "2.13.0",
  "name" : "MorsDiagnoseKardialDNSL",
  "title" : "Mors Diagnosekode - Kardial (DNSL)",
  "status" : "active",
  "experimental" : true,
  "date" : "2024-01-10T00:00:00+02:00",
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
  "description" : "Mors Diagnosekode - Kardiale årsager (DNSL)",
  "compose" : {
    "include" : [
      {
        "system" : "https://kip.rkkp.dk/fhir/CodeSystem/MorsDiagnosekoder",
        "concept" : [
          {
            "code" : "DE875",
            "display" : "DE875: Kaliumoverskud"
          },
          {
            "code" : "DE876A",
            "display" : "DE876A: Hypokaliæmi"
          },
          {
            "code" : "DE877",
            "display" : "DE877: Væskeoverskud"
          },
          {
            "code" : "DI110",
            "display" : "DI110: Incompensatio corids hypertensiva"
          },
          {
            "code" : "DI219",
            "display" : "DI219: Akut myokardieinfarkt (AMI uden specifikation"
          },
          {
            "code" : "DI461",
            "display" : "DI461: Pludselig hjertedød"
          },
          {
            "code" : "DI509",
            "display" : "DI509: Hjerteinkompensation uden specifikation"
          },
          {
            "code" : "DN188B",
            "display" : "DN188B: Pericarditis, uræmisk"
          }
        ]
      }
    ]
  }
}

```
