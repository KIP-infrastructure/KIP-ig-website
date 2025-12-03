# Paragraffer (RETSPSYK) - KIP Infrastructure v2.15.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Paragraffer (RETSPSYK)**

## ValueSet: Paragraffer (RETSPSYK) (Experimental) 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/ValueSet/ParagrafferRETSPSYK | *Version*:2.15.0 |
| Active as of 2022-09-28 | *Computable Name*:ParagrafferRETSPSYK |

 
Paragraffer (RETSPSYK) 

 **References** 

This value set is not used here; it may be used elsewhere (e.g. specifications and/or implementations that use this content)

### Logical Definition (CLD)

 

### Expansion

This value set contains 51 concepts

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
  "id" : "ParagrafferRETSPSYK",
  "url" : "https://kip.rkkp.dk/fhir/ValueSet/ParagrafferRETSPSYK",
  "version" : "2.15.0",
  "name" : "ParagrafferRETSPSYK",
  "title" : "Paragraffer (RETSPSYK)",
  "status" : "active",
  "experimental" : true,
  "date" : "2022-09-28T00:00:00+02:00",
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
  "description" : "Paragraffer (RETSPSYK)",
  "compose" : {
    "include" : [
      {
        "system" : "https://kip.rkkp.dk/fhir/CodeSystem/Paragraph",
        "concept" : [
          {
            "code" : "§§237-241",
            "display" : "Manddrab §§ 237-241"
          },
          {
            "code" : "§§237-241_§21",
            "display" : "Manddrab, forsøg §§ 237-241, jf. § 21"
          },
          {
            "code" : "§244",
            "display" : "Vold § 244"
          },
          {
            "code" : "§244_§21",
            "display" : "Vold, forsøg § 244, jf. § 21"
          },
          {
            "code" : "§245",
            "display" : "Kvalificeret vold m/skade på legeme eller helbred § 245"
          },
          {
            "code" : "§245_§21",
            "display" : "Kvalificeret vold m/skade på legeme eller helbred, forsøg § 245, jf. § 21"
          },
          {
            "code" : "§246",
            "display" : "Kvalificeret vold m/grov skade § 246"
          },
          {
            "code" : "§246_§21",
            "display" : "Kvalificeret vold m/grov skade, forsøg § 246, jf. § 21"
          },
          {
            "code" : "§119",
            "display" : "Vold og lign. mod nogen i offentlig tjeneste § 119"
          },
          {
            "code" : "§119_§21",
            "display" : "Vold og lign. mod nogen i offentlig tjeneste, forsøg § 119, jf. § 21"
          },
          {
            "code" : "§§249-255",
            "display" : "Anden personfarlig kriminalitet § 249-255"
          },
          {
            "code" : "§§249-255_§21",
            "display" : "Anden personfarlig kriminalitet, forsøg § 249-255, jf. § 21"
          },
          {
            "code" : "§§265-266",
            "display" : "Trusler § 265-266"
          },
          {
            "code" : "§§265-266_attempt",
            "display" : "Trusler, forsøg § 265-266"
          },
          {
            "code" : "§123",
            "display" : "Trusler, vidnetrusler §123"
          },
          {
            "code" : "§§260-262",
            "display" : "Ulovlig tvang §§ 260-262"
          },
          {
            "code" : "§§260-262_attempt",
            "display" : "Ulovlig tvang, forsøg §§ 260-262"
          },
          {
            "code" : "§180",
            "display" : "Brandstiftelse, kvalificeret § 180"
          },
          {
            "code" : "§180_§21",
            "display" : "Brandstiftelse, kvalificeret, forsøg § 180, jf. § 21"
          },
          {
            "code" : "§181",
            "display" : "Brandstiftelse, forsætlig § 181"
          },
          {
            "code" : "§181_§21",
            "display" : "Brandstiftelse, forsætlig, forsøg § 181, jf. § 21"
          },
          {
            "code" : "§216",
            "display" : "Voldtægt § 216"
          },
          {
            "code" : "§216_§21",
            "display" : "Voldtægt, forsøg § 216, jf. § 21"
          },
          {
            "code" : "§§210-236",
            "display" : "Anden sædelighed §§ 210-236 (- § 216)"
          },
          {
            "code" : "§§210-236_§21",
            "display" : "Anden sædelighed, forsøg §§ 210-236 (- § 216), jf. § 21"
          },
          {
            "code" : "§191",
            "display" : "Narkotikakriminalitet § 191"
          },
          {
            "code" : "§191_§21",
            "display" : "Narkotikakriminalitet, forsøg § 191, jf. § 21"
          },
          {
            "code" : "narcotics",
            "display" : "Lov om euforiserende stoffer"
          },
          {
            "code" : "narcotics_attempt",
            "display" : "Lov om euforiserende stoffer, forsøg"
          },
          {
            "code" : "§288",
            "display" : "Røveri §288"
          },
          {
            "code" : "§288_1",
            "display" : "Røveri § 288, stk. 1"
          },
          {
            "code" : "§288_1_§21",
            "display" : "Røveri, forsøg § 288, stk. 1, jf. § 21"
          },
          {
            "code" : "§288_2",
            "display" : "Røveri, særligt farligt, § 288, stk. 2"
          },
          {
            "code" : "§288_2_§21",
            "display" : "Røveri, særligt farligt, forsøg § 288, stk. 2, jf. § 21"
          },
          {
            "code" : "§276",
            "display" : "Tyveri § 276"
          },
          {
            "code" : "§276_§21",
            "display" : "Tyveri, forsøg § 276, jf. § 21"
          },
          {
            "code" : "§§278-280",
            "display" : "Bedrageri mv. §§ 278-280"
          },
          {
            "code" : "§§278-280_§21",
            "display" : "Bedrageri mv., forsøg §§ 278-280, jf. § 21"
          },
          {
            "code" : "§291",
            "display" : "Hærværk § 291"
          },
          {
            "code" : "§291_§21",
            "display" : "Hærværk, forsøg § 291, jf. § 21"
          },
          {
            "code" : "criminal_law_other",
            "display" : "Straffeloven, øvrige"
          },
          {
            "code" : "criminal_law_other_attempt",
            "display" : "Straffeloven, øvrige, forsøg"
          },
          {
            "code" : "weapons_decree",
            "display" : "Våbenbekendtgørelsen"
          },
          {
            "code" : "weapons_decree_attempt",
            "display" : "Våbenbekendtgørelsen, forsøg"
          },
          {
            "code" : "traffic_law",
            "display" : "Færdselsloven"
          },
          {
            "code" : "traffic_law_attempt",
            "display" : "Færdselsloven, forsøg"
          },
          {
            "code" : "special_law",
            "display" : "Særloven, øvrige"
          },
          {
            "code" : "special_law_attempt",
            "display" : "Særloven, øvrige, forsøg"
          },
          {
            "code" : "pardon_petition",
            "display" : "Benådningsandragende"
          },
          {
            "code" : "asylum_seeker",
            "display" : "Asylansøger"
          }
        ]
      },
      {
        "system" : "https://kip.rkkp.dk/fhir/CodeSystem/GenericValues",
        "concept" : [
          {
            "code" : "other",
            "display" : "Andet"
          }
        ]
      }
    ]
  }
}

```
