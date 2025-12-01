# Registrering - Eksklusionsårsag (HAEMA) - KIP Infrastructure v2.14.2

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Registrering - Eksklusionsårsag (HAEMA)**

## ValueSet: Registrering - Eksklusionsårsag (HAEMA) (Experimental) 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/ValueSet/RegistreringEksklusionHAEMA | *Version*:2.14.2 |
| Active as of 2022-08-22 | *Computable Name*:RegistreringEksklusionHAEMA |

 
Registrering - Eksklusionsårsag (HAEMA) 

 **References** 

This value set is not used here; it may be used elsewhere (e.g. specifications and/or implementations that use this content)

### Logical Definition (CLD)

 

### Expansion

This value set contains 20 concepts

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
  "id" : "RegistreringEksklusionHAEMA",
  "url" : "https://kip.rkkp.dk/fhir/ValueSet/RegistreringEksklusionHAEMA",
  "version" : "2.14.2",
  "name" : "RegistreringEksklusionHAEMA",
  "title" : "Registrering - Eksklusionsårsag (HAEMA)",
  "status" : "active",
  "experimental" : true,
  "date" : "2022-08-22T00:00:00+02:00",
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
  "description" : "Registrering - Eksklusionsårsag (HAEMA)",
  "compose" : {
    "include" : [
      {
        "system" : "https://kip.rkkp.dk/fhir/CodeSystem/DiseasesUnspecified",
        "concept" : [
          {
            "code" : "amyloidose<2012",
            "display" : "Amyloidose før 2012"
          },
          {
            "code" : "all<2005",
            "display" : "ALL før 2005"
          },
          {
            "code" : "all<2000",
            "display" : "AML før 2000"
          },
          {
            "code" : "cll<2008",
            "display" : "CLL før 2008"
          },
          {
            "code" : "hodgkin<1998",
            "display" : "Hodgkin diagnosticeret før 1998 (2000 ØstDK)"
          },
          {
            "code" : "lymfom<1983",
            "display" : "Lymfom diagnosticeret før 1983 (2000 ØstDK)"
          },
          {
            "code" : "mds<2010",
            "display" : "MDS diagnosticeret før 2010"
          },
          {
            "code" : "mgus<2013",
            "display" : "MGUS eller Amyloidose før 2013"
          },
          {
            "code" : "myelom<2005",
            "display" : "Myelomatose diagnosticeret før 2005"
          },
          {
            "code" : "mpn<2010",
            "display" : "Myeloproliferativ sygdom diagnosticeret før 2010"
          },
          {
            "code" : "leukaemi_haarcelle",
            "display" : "Hårcelle leukæmi"
          },
          {
            "code" : "lgl",
            "display" : "Large Granular Leukemia (LGL)"
          },
          {
            "code" : "t_pll",
            "display" : "T-Prolymfocytleukæmi"
          }
        ]
      },
      {
        "system" : "https://kip.rkkp.dk/fhir/CodeSystem/Registry",
        "concept" : [
          {
            "code" : "ej_reg_pligtig",
            "display" : "Ej registreringspligtig hæmatologisk sygdom"
          },
          {
            "code" : "eksisterende",
            "display" : "Eksisterende registreringer dækker over de(n) hæmatologiske sygdomme pt har"
          },
          {
            "code" : "udland",
            "display" : "Bosiddende i udlandet på diagnosetidspunktet"
          },
          {
            "code" : "flyttet",
            "display" : "Patientforløb flyttet til anden hæmatologisk afdeling"
          },
          {
            "code" : "barn",
            "display" : "Behandlet på børneafdeling el anden IKKE hæmatologisk afd"
          },
          {
            "code" : "ej_relaps",
            "display" : "Pt har ikke relaps/progression"
          },
          {
            "code" : "afsluttet",
            "display" : "Afsluttet: Patientens forløb er afsluttet fra afdeling og følges IKKE på anden hæmatologisk afdeling"
          }
        ]
      }
    ]
  }
}

```
